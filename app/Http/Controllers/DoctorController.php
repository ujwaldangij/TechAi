<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class DoctorController extends Controller
{
    // Show the list of doctors
    public function index()
    {
        $doctors = Doctor::all();
        return view('doctor-list', compact('doctors'));
    }

    // Show the form to add a new doctor
    public function create()
    {
        return view('add-doctor');
    }

    // Store a newly created doctor
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'year_started_practice' => 'required|integer',
            'specialist' => 'required|string|max:255',
            'upload_signature' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $doctor = new Doctor();
        $doctor->name = $request->input('name');
        $doctor->city = $request->input('city');
        $doctor->year_started_practice = $request->input('year_started_practice');
        $doctor->specialist = $request->input('specialist');

        if ($request->hasFile('profile_photo')) {
            $profilePhotoPath = $request->file('profile_photo')->store('public/profile_photos');
            $doctor->profile_photo = Storage::url($profilePhotoPath);
        }

        if ($request->hasFile('upload_signature')) {
            $signaturePath = $request->file('upload_signature')->store('public/signatures');
            $doctor->upload_signature = Storage::url($signaturePath);
        }

        $doctor->save();

        return redirect()->route('doctor-list')->with('success', 'Doctor added successfully!');
    }

    // Show the doctor details
    public function show($id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('doctor-profile', compact('doctor'));
    }

    // Delete a doctor
    public function destroy($id)
    {
        $doctor = Doctor::findOrFail($id);

        // Optionally, delete associated files
        if ($doctor->profile_photo) {
            Storage::delete($doctor->profile_photo);
        }
        if ($doctor->upload_signature) {
            Storage::delete($doctor->upload_signature);
        }

        $doctor->delete();

        return redirect()->route('doctor-list')->with('success', 'Doctor deleted successfully!');
    }
}

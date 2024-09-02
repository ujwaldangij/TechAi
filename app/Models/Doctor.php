<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'name',
        'city',
        'profile_img',
        'start_year',
        'specialist',
        'signature',
    ];
}

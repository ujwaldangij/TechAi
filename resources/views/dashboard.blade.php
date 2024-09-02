<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="cache-control" content="private, max-age=0, no-cache">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="expires" content="0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stamlotelsartan.intechify.in/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css">

    <!-- Title -->
    <title>Stamlotelsartan</title>
    
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="{{ asset('js/bootbox.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href='#' onclick="window.history.back()" class="show-mob back-btn">
            <i class="fa fa-angle-left"></i>
        </a>
        <a href="{{ route('dashboard') }}" class="logo">
            <img src="https://stamlotelsartan.intechify.in/img/Drs-Day-Activity-logo.svg" alt="Logo"/>
        </a>
        <a class="navbar-brand show-mob" href="#">Dashboard</a>
        <div class="mob_api_logo">
            <img src="https://stamlotelsartan.intechify.in/img/30-Years-Red-logo.svg" alt="Logo"/>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbarRight" id="navbarSupportedContent">
            <div class="overlay"></div>
            <div class="menu-close-btn show-mob show-close-btn">
                <a href="#" id="close-menu-btn">
                    <i class='fa fa-close'></i>
                </a>
            </div>
            <ul class="navbar-nav mr-auto" id="main_menu">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('dashboard') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('add-doctor') }}" class="nav-link">Add New Doctor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('doctor-list') }}">Doctor List</a>
                </li>
                <li class="nav-item">
                    <!-- <a href="{{ url('conference') }}" class="nav-link">Conference</a> -->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('profile') }}">My Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('logout') }}">Logout</a>
                </li>
            </ul>
            <div class="api_logo">
                <img src="https://stamlotelsartan.intechify.in/img/30-Years-Red-logo.svg" alt="API Logo"/>
            </div>
        </div>
    </nav>    

    <div class="container">
        <div class="col-md-10 offset-md-1 custom-card">
            <h1 class="text-left">Welcome!</h1>
            <p>On Doctor’s Day, July 1st 2024, Dr Reddy's honors and appreciates the dedication and sacrifice of all doctors who work tirelessly to make the world healthier.</p>
            <p>This digital initiative is a celebration of the hard work and contribution that you bring to this noble profession.</p>
            <p><b>Wish you Happy Doctor's Day.</b></p><br><br>

            <div class="doctorCount">
                <div class="row">
                    <div class="col-9 dashboard-para">
                        <p>Participant Count</p>
                    </div>
                    <div class="col-3 dashboard-count">
                        <p>2</p>
                    </div>
                    <div class="col-12 listhr">
                        <hr>
                    </div>
                    <div class="col-9 dashboard-para">
                        <p>Overall Participant Count</p>
                    </div>
                    <div class="col-3 dashboard-count">
                        <p>6911</p>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-4 offset-md-4 d-flex justify-content-center">
                    <div class="actions">
                        <a href="{{ url('add-doctor') }}" class="btn btn-primary adddoctorbtn">Add new doctor</a>&nbsp;
                        <a href="{{ url('doctor-list') }}" class="btn btn-primary adddoctorbtn">Doctor list</a>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <!-- Modal -->
    <div class="modal fade" id="dashboardmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Guidelines</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4" style="margin: auto;">
                            <p><strong>example</strong></p>
                        </div>
                        <div class="col-2 col-sm-2 col-md-2 col-lg-2">
                            <p></p>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 modal-img">
                            <img src="https://stamlotelsartan.intechify.in/img/seal.png" class="img-responsive" style="width:100%" alt="Seal Image"/>
                        </div>
                    </div>
                    <ol class="modal-para">
                        <li>You can add the details of a doctor.</li>
                        <li>Enter the doctor’s name and upload the seal.</li>
                        <li>Crop the seal image to the right dimension.</li>
                        <li>After entering the doctor’s name and uploading the seal, it gets recorded successfully.</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container desktop text-center">
            <img src="{{ asset('img/brand-logos.svg') }}" class="img-fluid" alt="Brand Logos"/>
        </div>
        <div class="container mobile-logo">
            <img src="{{ asset('img/brand-logos.svg') }}" class="img-fluid" alt="Brand Logos"/>
        </div>
    </footer>    

    <footer class="footer bg-light">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <div class="footerlogo">
                        <img src="https://stamlotelsartan.intechify.in/img/stamlo-logo.svg" class="img-fluid" alt="Stamlo Logo"/>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="footer-logo">
                        <img src="https://stamlotelsartan.intechify.in/img/dr-reddys-logo.svg" class="img-fluid" alt="Dr Reddy's Logo"/>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="{{ asset('js/bootbox.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
</body>
</html>

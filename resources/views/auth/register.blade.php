<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
        <meta name="Author" content="Spruko Technologies Private Limited">
        <meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>

        <!-- Title -->
          <title> ELSHADAI GOLDEN TRADERS - Signup</title>

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('assetss/img/brand/favicon.png')}}" type="image/x-icon"/>

        <!-- Icons css -->
        <link href="{{ asset('assetss/css/icons.css')}}" rel="stylesheet">

        <!-- Bootstrap css -->
        <link href="{{ asset('assetss/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <!--  Right-sidemenu css -->
        <link href="{{ asset('assetss/plugins/sidebar/sidebar.css')}}" rel="stylesheet">

        <!--  Custom Scroll bar-->
        <link href="{{ asset('assetss/plugins/mscrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet"/>

        <!--- Style css --->
        <link href="{{ asset('assetss/css/style.css')}}" rel="stylesheet">
        <link href="{{ asset('assetss/css/boxed.css')}}" rel="stylesheet">
        <link href="{{ asset('assetss/css/dark-boxed.css')}}" rel="stylesheet">

        <!--- Dark-mode css --->
        <link href="{{ asset('assetss/css/style-dark.css')}}" rel="stylesheet">

        <!---Skinmodes css-->
        <link href="{{ asset('assetss/css/skin-modes.css')}}" rel="stylesheet" />

        <!--- Animations css-->
        <link href="{{ asset('assetss/css/animate.css')}}" rel="stylesheet">

    </head>
    <body class="error-page1 main-body bg-light text-dark">

        <!-- Loader -->
        <div id="global-loader">
            <img src="{{ asset('assetss/img/loader.svg')}}" class="loader-img" alt="Loader">
        </div>
        <!-- /Loader -->

        <!-- Page -->
        <div class="page">

            <div class="container-fluid">
                <div class="row no-gutter">
                    <!-- The image half -->
                  
                    <!-- The content half -->
                    <div class="col-md-12 col-lg-12 col-xl-12 bg-white">
                        <div class="login d-flex align-items-center py-2">
                            <!-- Demo content-->
                            <div class="container p-0">
                                <div class="row">
                                    <div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
                                        <div class="card-sigin">
                                            <div class="mb-5 d-flex">
                                            
                                                <h1 class="main-logo1 ms-1 me-0 my-auto tx-28"> Signup</h1>

                                                <?php
                                                if(request()->username){
                                                    $ref=request()->username;
                                                }else{
                                                    $ref="admin";
                                                }
                                                ?>
                                            </div>
                                            <div class="card-sigin">
                                                <div class="main-signup-header">
                                                    <h2>Welcome onboard!</h2>
                                                    <h5 class="fw-semibold mb-4">Please sign up to continue.</h5>
                                                    <form method="POST" action="{{ route('register') }}" id="reg"> 
                                            
                                                <input id="csrf" type="hidden"  name="_token" value="{{ csrf_token() }}" >
                                                <input type="hidden" name="ref" value="<?php echo $ref ?>">
                                                <div class="form-group row">                                                    
                                                    <div class="col-sm-6">
                                                    <label>Enter Firstname: </label>
                                                        <input id="Fname" type="text" class="form-control @error('Fname') is-invalid @enderror regTxtBox" name="Fname" value="{{ old('Fname') }}" required autocomplete="Fname" autofocus placeholder="First Name">

                                                        @error('Fname')
                                                            <span class="invalid-feedback" role="alert alert-danger">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <br><br>
                                                      <div class="col-sm-6">
                                                    <label>Enter LastName: </label>
                                                        <input id="Lname" type="text" class="form-control @error('Lname') is-invalid @enderror regTxtBox" name="Lname" value="{{ old('Lname') }}" required autocomplete="Fname" autofocus placeholder="Last Name">

                                                        @error('Lname')
                                                            <span class="invalid-feedback" role="alert alert-danger">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>


                                                
                                                <div class="form-group row"> 

                                                    <div class="col-sm-12">
                                                    <label>Enter Your Email: </label>
                                                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror regTxtBox" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">

                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert alert-danger">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">

                                                    <div class="col-sm-12">
                                                    <label>Enter Username: </label>
                                                       <input id="username" type="username" class="form-control @error('username') is-invalid @enderror regTxtBox" name="username" value="{{ old('username') }}" required  placeholder="Usernane">

                                                        @error('username')
                                                            <span class="invalid-feedback" role="alert alert-danger" >
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    
                                                    <div class="col-sm-12">
                                                        <label>Enter mobile: </label>
                                                       <input id="number" type="number" class="form-control @error('phone') is-invalid @enderror regTxtBox" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder=" 254789326743 ">

                                                        @error('phone')
                                                            <span class="invalid-feedback" role="alert alert-danger" >
                                                                <!--<strong>{{ $message }}</strong>-->
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                     <label>Choose your country: </label>
                                                         <select class="form-control" name="country" >
                                                          
                                                          <option value="KENYA">KENYA</option>
                                                       
                                                        </select>
                                                        <!--<input id="Lname" type="text" class="form-control @error('Lname') is-invalid @enderror regTxtBox" name="Lname" value="{{ old('Lname') }}" required autocomplete="Lname" autofocus placeholder="Last Name">-->

                                                        @error('country')
                                                            <span class="invalid-feedback" role="alert alert-danger">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                    <label>Enter password: </label>
                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror regTxtBox" name="password" required autocomplete="new-password" placeholder="Password">

                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert alert-danger" >
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-sm-6">
                                                    <label>Repeat Password: </label>
                                                        <input id="password-confirm" type="password" class="form-control regTxtBox" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" >
                                                    </div>

                                                </div>
                                      
                                            
                                           
                                            
                                            <style>
                                            #g-recaptcha-response {
                                            display: block !important;
                                            position: absolute;
                                            margin: -78px 0 0 0 !important;
                                            width: 302px !important;
                                            height: 76px !important;
                                            z-index: -999999;
                                            opacity: 0;
                                        }
                                            </style>

                                                <?php
                                                    $usn = App\User::where('username', Session::get('ref'))->get();
                                                ?>


                                                <div class="">
                                                    <div class="" align="center">
                                                        <br><br>
                                                        @if($settings->user_reg == 1)
                                                            <button type="submit" class="collc btn btn-info">
                                                                {{ __('Register') }}
                                                            </button>
                                                        @else
                                                            <div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Registration disabled by admin.</div>
                                                        @endif
                                                        <br><br>
                                                    </div>
                                                </div>

                                                <div class="">
                                                    <div class="" align="center">
                                                       <p>
                                                          <strong>Already have an account? <a href="/login">Login</a></strong>
                                                       </p>                            
                                                    </div>
                                                </div>                                      
                                        
                                            </form>
                                                 </form>
                                                </div>
                                                
                                        
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End -->
                        </div>
                    </div><!-- End -->
                </div>
            </div>

        </div>
        <!-- End Page -->

        <!-- JQuery min js -->
        <script src="{{ asset('assetss/plugins/jquery/jquery.min.js')}}"></script>

        <!-- Bootstrap Bundle js -->
        <script src="{{ asset('assetss/plugins/bootstrap/js/popper.min.js')}}"></script>
        <script src="{{ asset('assetss/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <!-- Ionicons js -->
        <script src="{{ asset('assetss/plugins/ionicons/ionicons.js')}}"></script>

        <!-- Moment js -->
        <script src="{{ asset('assetss/plugins/moment/moment.js')}}"></script>

        <!-- P-scroll js -->
        <script src="{{ asset('assetss/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>

        <!-- eva-icons js -->
        <script src="{{ asset('assetss/js/eva-icons.min.js')}}"></script>

        <!-- Rating js-->
        <script src="{{ asset('assetss/plugins/rating/jquery.rating-stars.js')}}"></script>
        <script src="{{ asset('assetss/plugins/rating/jquery.barrating.js')}}"></script>

        <!-- Custom Scroll bar Js-->
        <script src="{{ asset('assetss/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>

        <!-- custom js -->
        <script src="{{ asset('assetss/js/custom.js')}}"></script>

    </body>
</html>




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
        <title> ELSHADAI GOLDEN TRADERS - Activate</title>

        <!-- Favicon -->
        <link rel="icon" href="<?php echo e(asset('assetss/img/brand/favicon.png')); ?>" type="image/x-icon"/>

        <!-- Icons css -->
        <link href="<?php echo e(asset('assetss/css/icons.css')); ?>" rel="stylesheet">

        <!-- Bootstrap css -->
        <link href="<?php echo e(asset('assetss/plugins/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">

        <!--  Right-sidemenu css -->
        <link href="<?php echo e(asset('assetss/plugins/sidebar/sidebar.css')); ?>" rel="stylesheet">

        <!--  Custom Scroll bar-->
        <link href="<?php echo e(asset('assetss/plugins/mscrollbar/jquery.mCustomScrollbar.css')); ?>" rel="stylesheet"/>

        <!--- Style css --->
        <link href="<?php echo e(asset('assetss/css/style.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('assetss/css/boxed.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('assetss/css/dark-boxed.css')); ?>" rel="stylesheet">

        <!--- Dark-mode css --->
        <link href="<?php echo e(asset('assetss/css/style-dark.css')); ?>" rel="stylesheet">

        <!---Skinmodes css-->
        <link href="<?php echo e(asset('assetss/css/skin-modes.css')); ?>" rel="stylesheet" />

        <!--- Animations css-->
        <link href="<?php echo e(asset('assetss/css/animate.css')); ?>" rel="stylesheet">

    </head>
    <body class="error-page1 main-body bg-light text-dark">

        <!-- Loader -->
        <div id="global-loader">
            <img src="<?php echo e(asset('assetss/img/loader.svg')); ?>" class="loader-img" alt="Loader">
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
                                                <a href="">
                                               
                                                </a>
                                                <!-- <h1 class="main-logo1 ms-1 me-0 my-auto tx-28"><?php echo e(env('APP_NAME')); ?></h1> -->
                                            </div>
                                            <div class="card-sigin">
                                                <div class="main-signup-header">
                                                    <h2>Activate Account</h2>
                                                    <h5 class="fw-semibold mb-4">Please activate in to continue.</h5>
                                                    <form method="POST" action="<?php echo e(route('session_sa.upload_u2s')); ?>">
                                                        <?php if(Session::has('err_msg')): ?>
                                                    <div class="alert alert-danger">
                                                        <!--<?php echo e(Session::get('err_msg')); ?>-->
                                                        Ooops Account not yet activated <a href="#" >Click Here to activate</a>
                                                            </div>
                                                             <?php echo e(Session::forget('err_msg')); ?>

                                                        <?php endif; ?>

                                                                                                      
                                                
                                                        <div class="form-group">
                                                            <label>Mobile</label> <input class="form-control" value="<?php echo e(Auth::user()->phone); ?>"  type="text" name="phone" value="<?php echo e(old('phone')); ?>" readonly="true" autocomplete="phone" autofocus placeholder="Mobile">

                                                            
                                                           
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Amount</label> <input class="form-control" name="ammount" value="<?php echo e(env('Activation_amount')); ?>" readonly="true" autocomplete="current-password"  type="number">
                                                            
                                                    
                                                        </div><button class="btn btn-main-primary btn-block">Activate</button>
                                                      
                                                    </form>
                                                   
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
        <script src="<?php echo e(asset('assetss/plugins/jquery/jquery.min.js')); ?>"></script>

        <!-- Bootstrap Bundle js -->
        <script src="<?php echo e(asset('assetss/plugins/bootstrap/js/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assetss/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

        <!-- Ionicons js -->
        <script src="<?php echo e(asset('assetss/plugins/ionicons/ionicons.js')); ?>"></script>

        <!-- Moment js -->
        <script src="<?php echo e(asset('assetss/plugins/moment/moment.js')); ?>"></script>

        <!-- P-scroll js -->
        <script src="<?php echo e(asset('assetss/plugins/perfect-scrollbar/perfect-scrollbar.min.js')); ?>"></script>

        <!-- eva-icons js -->
        <script src="<?php echo e(asset('assetss/js/eva-icons.min.js')); ?>"></script>

        <!-- Rating js-->
        <script src="<?php echo e(asset('assetss/plugins/rating/jquery.rating-stars.js')); ?>"></script>
        <script src="<?php echo e(asset('assetss/plugins/rating/jquery.barrating.js')); ?>"></script>

        <!-- Custom Scroll bar Js-->
        <script src="<?php echo e(asset('assetss/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js')); ?>"></script>

        <!-- custom js -->
        <script src="<?php echo e(asset('assetss/js/custom.js')); ?>"></script>

    </body>
</html>

<?php /**PATH C:\xamppp\htdocs\alizona\resources\views/auth/activate.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="en">

<!-- index.html  Tue, 07 Jan 2020 03:35:33 GMT -->
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>Fexup traders</title>

		<!--Bootstrap css-->
		<link rel="stylesheet" href="/core/public/assets/plugins/bootstrap/css/bootstrap.min.css">
		
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<!--Style css -->
		<link href="/core/public/assets/css/style.css" rel="stylesheet" />
		<link href="/core/public/assets/css/dark-style.css" rel="stylesheet" />
		<link href="/core/public/assets/css/skin-modes.css" rel="stylesheet">

		<!-- P-scrollbar css-->
		<link href="/core/public/assets/plugins/p-scrollbar/p-scrollbar.css" rel="stylesheet" />

		<!-- Sidemenu css -->
		<link href="/core/public/assets/css/sidemenu.css" rel="stylesheet" />

		<!-- Rightsidebar css -->
		<link href="/core/public/assets/plugins/sidebar/sidebar.css" rel="stylesheet">

		<!-- INTERNAL Morris  Charts css-->
		<link href="/core/public/assets/plugins/morris/morris.css" rel="stylesheet" />

		<!---Icons css-->
		<link href="/core/public/assets/css/icons.css" rel="stylesheet" />

		<!-- INTERNAL Data table css -->
		<link href="/core/public/assets/plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet" />
		<link href="/core/public/public/assets/plugins/datatable/responsivebootstrap4.min.css" rel="stylesheet" />

	    <!-- Switcher css -->
		<link href="/core/public/assets/switcher/css/switcher.css" rel="stylesheet" type="text/css"/>
		<link href="/core/public/assets/switcher/demo.css" rel="stylesheet" type="text/css"/>
		<!--my-->
		 <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
    

<!-- General CSS Files -->

<!-- our new rec links -->
<!-- core/public/assets/enock/ -->
<!-- <?php echo e(url('core/public/assets/plugins/bootstrap/js/popper.min.js')); ?> -->
<link rel="stylesheet" href="<?php echo e(url('core/public/assets/enock/modules/bootstrap/css/bootstrap.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(url('core/public/assets/enock/modules/fontawesome/css/all.min.css')); ?>">

<!-- CSS Libraries -->
<link rel="stylesheet" href="<?php echo e(url('core/public/assets/enock/modules/jqvmap/dist/jqvmap.min.css')); ?>">

<link rel="stylesheet" href="<?php echo e(url('core/public/assets/enock/modules/summernote/summernote-bs4.css')); ?>">
<link rel="stylesheet" href="<?php echo e(url('core/public/assets/enock/modules/owlcarousel2/dist/((rudisha ikue asse))/owl.carousel.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(url('core/public/assets/enock/modules/owlcarousel2/dist/((rudisha _asse))/owl.theme.default.min.css')); ?>">

<!-- Template CSS -->
<link rel="stylesheet" href=" <?php echo e(url('core/public/assets/enock/css/style.min.css')); ?>">
<link rel="stylesheet" href=" <?php echo e(url('core/public/assets/enock/css/components.min.css')); ?>">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}

@media  screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media  screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
<link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
</head>
<body style="background-image:url('/core/public/assets/naka.jpeg');">
    
<div class="topnav" id="myTopnav">
  <a href="/<?php echo e($user->username); ?>/dashboard" class="active">Home</a>
  <a href="/<?php echo e($user->username); ?>/wallet">Deposit Money</a>
  <a href="/<?php echo e($user->username); ?>/investments">Invest Now</a>
  <a href="/<?php echo e($user->username); ?>/downlines">My Referrals</a>
  <a href="/<?php echo e($user->username); ?>/withdrawal">Withdaw Money</a>
    <a href="/<?php echo e($user->username); ?>/profile">My Profile</a>
      <a href="/logout"> Logout</a>
  
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

<!---->
<div class="" id="app p-2">
   
<div class="p-3">

        <!-- ---------------------------------------------------------------------------------------------------------------Start app main Content -->
        <!--call the content-->
         <?php echo $__env->yieldContent('content'); ?>
        <!-- Start app Footer part -->
     </div>   
        
        <footer class="main-footer">
            <div class="footer-left">
                 <div class="bullet"></div> Developed By <a href="<?php echo e(env('APP_URL')); ?>">CODEWEB INC.</a>
            </div>
            <div class="footer-right">

            </div>
        </footer>
    </div>
</div>

	<!-- Jquery js-->
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="<?php echo e(url('core/public/assets/js/jquery.min.js')); ?>"></script>

		<!--Bootstrap.min js-->
		<script src="<?php echo e(url('core/public/assets/plugins/bootstrap/js/popper.min.js')); ?>"></script>
		<script src="<?php echo e(url('core/public/assets/plugins/bootstrap/js/bootstrap.min.js')); ?>"></script>

		<!--Jquery Sparkline js-->
		<script src="<?php echo e(url('core/public/assets/js/jquery.sparkline.min.js')); ?>"></script>

		<!-- Chart Circle js-->
		<script src="<?php echo e(url('core/public/assets/js/circle-progress.min.js')); ?>"></script>

		<!-- Star Rating js-->
		<script src="<?php echo e(url('core/public/assets/plugins/rating/jquery.rating-stars.js')); ?>"></script>

		<!--Moment js-->
		<script src="<?php echo e(url('core/public/assets/plugins/moment/moment.min.js')); ?>"></script>

		<!--Side-menu js-->
		<script src="<?php echo e(url('core/public/assets/plugins/sidemenu/sidemenu.js')); ?>"></script>

		<!-- P-scrollbar js-->
		<script src="<?php echo e(url('core/public/assets/plugins/p-scrollbar/p-scrollbar.js')); ?>"></script>
		<script src="<?php echo e(url('core/public/assets/plugins/p-scrollbar/p-scrollbar-leftmenu.js')); ?>"></script>

		<!--Peitychart js -->
		<script src="<?php echo e(url('core/public/assets/plugins/peitychart/jquery.peity.min.js')); ?>"></script>
		<script src="<?php echo e(url('core/public/assets/plugins/peitychart/peitychart.init.js')); ?>"></script>

		<!-- Rightsidebar js -->
		<script src="<?php echo e(url('core/public/assets/plugins/sidebar/sidebar.js')); ?>"></script>

		<!-- INTERNAL Apex-charts js-->
		<script src="<?php echo e(url('core/public/assets/js/apexcharts.js')); ?>"></script>

		<!-- INTERNAL Data tables js-->
		<script src="<?php echo e(url('core/public/assets/plugins/datatable/jquery.dataTables.min.js')); ?>"></script>
		<script src="<?php echo e(url('core/public/assets/plugins/datatable/dataTables.bootstrap4.min.js')); ?>"></script>
		<script src="<?php echo e(url('core/public/assets/plugins/datatable/dataTables.responsive.min.js')); ?>"></script>

		<!-- INTERNAL JVectormap js-->
		<script src="<?php echo e(url('core/public/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')); ?>"></script>
       <script src="<?php echo e(url('core/public/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')); ?>"></script>
        <script src="<?php echo e(url('core/public/assets/plugins/jvectormap/gdp-data.js')); ?>"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

		<!-- INTERNAL Charts js-->
		<script src="<?php echo e(url('core/public/assets/plugins/chart/chart.min.js')); ?>"></script>
		<script src="<?php echo e(url('core/public/assets/plugins/chart/chart.bundle.js')); ?>"></script>

		<!--INTERNAL Custom-charts js-->
		<script src="<?php echo e(url('core/public/assets/js/index.js')); ?>"></script>

		<!-- Custom js-->
		<script src="<?php echo e(url('core/public/assets/js/custom.js')); ?>"></script>
<!--end of old js-->
<!-- General JS Scripts -->
<script src="<?php echo e(url('core/public/assets/enock/bundles/lib.vendor.bundle.js')); ?>"></script>
<script src=" <?php echo e(url('core/public/assets/enock/js/CodiePie.js')); ?>"></script>

<!-- JS Libraies -->
<script src="core/public/assets/enock/modules/jquery.sparkline.min.js <?php echo e(url('js/page/modules-sparkline.js')); ?>"></script>
<script src=" <?php echo e(url('core/public/assets/enock/modules/chart.min.js')); ?>"></script>
<script src=" <?php echo e(url('core/public/assets/enock/modules/owlcarousel2/dist/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(url('core/public/assets/enock/modules/summernote/summernote-bs4.js')); ?>"></script>
<script src="<?php echo e(url('core/public/assets/enock/modules/chocolat/dist/js/jquery.chocolat.min.js')); ?>"></script>

<!-- Page Specific JS File -->
<script src="<?php echo e(url('core/public/assets/enock/js/page/index.js')); ?>"></script>
<script src="https://use.fontawesome.com/312e90a705.js"></script>
<!-- Template JS File -->
<script src="<?php echo e(url('core/public/assets/enock/js/scripts.js')); ?>"></script>
<script src="<?php echo e(url('core/public/assets/enock/js/custom.js')); ?>"></script>
</body>

<!-- index.html  Tue, 07 Jan 2020 03:35:33 GMT -->
</html>
<?php /**PATH /home/motortra/nakamotoagencies.xyz/core/resources/views/layouts/main.blade.php ENDPATH**/ ?>
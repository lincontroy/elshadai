<!-- app-content-->
@extends('layouts.main')

@section('content')


<?php
  $totalEarning = 0;    
  $currentEarning = 0;
  $workingDays = 0;
     
  foreach($actInv as $inv)
  {
    $totalElapse = getDays(date('y-m-d'), $inv->end_date);
    if($totalElapse == 0)
    {
      $lastWD = $inv->last_wd;
      $enddate = ($inv->end_date);
      
      $getDays = getDays($lastWD, $enddate);
      $currentEarning += $getDays*$inv->interest*$inv->capital;
      
    }
    else
    {
      $sd = $inv->last_wd;
      $ed = date('Y-m-d');        
      
      $getDays = getDays($sd, $ed);
      $currentEarning += $getDays*$inv->interest*$inv->capital;
    }
  }
?>
			

					    <!-- page-header -->
						<div class="page-header">
							<div class="page-leftheader">
								<h1 class="page-title text-white text-center">WELCOME BACK {{$user->firstname}}</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="las la-home mr-2 fs-16"></i>Home</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Dashboard</a></li>
								</ol>
							</div>
						
						</div>
						<!-- End page-header -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-3 col-md-6">
								<div class="card bg-transparent border border-light img-card overflow-hidden">
								 
									<div class="card-body">
										<div class="d-flex">
											<div class="mr-5">
											
											</div>
											
											<?php
											
											$general_views = ($user->views_income);
											//--wallet_in_ksh--
											$general_cash= ($user->wallet);
											
											$country = ($user->lastname);
											
											$symb = 'KSH';
											
											$con = 1;
											
                                                switch ($country) {
                                                  case "KENYA":
                                                      $new_views= $general_views;
                                                     $new_cash = $general_cash * 1;
                                                     $symb= 'KSH';
                                                     $con = 1;
                                                    break;
                                                    
                                                  case "RWANDA":
                                                      $new_views= $general_views * 10;
                                                    $new_cash = $general_cash * 10;
                                                     $symb = 'RWF';
                                                     $con = 10;
                                                    break;
                                                    
                                                  case "TANZANIA":
                                                      $new_views= $general_views * 20;
                                                    $new_cash = $general_cash * 20;
                                                     $symb = 'TZ';
                                                     $con = 20;
                                                    break;
                                                  case "UGANDA":
                                                      $new_views= $general_views * 3.2;
                                                    $new_cash = $general_cash * 3.2;
                                                     $symb = 'UG';
                                                     $con = 32;
                                                    break;
                                                    
                                                  default:
                                                      $new_views= $general_views * 0.01;
                                                    $new_cash = $general_cash * 0.01;
                                                    $symb = '$';
                                                    $con = 0.01;
                                                }
                                        	?>
		                                   
		                                   
		
											
											<div class="text-white mt-3">
												<p class="mb-1 font-weight-semibold fs-14 text-success">ACCOUNT BALANCE </p>
											
											
												<h2 class="mt-1 mb-0 fs-30 font-weight-bold "><?php echo "$symb" ?><?php echo "$new_cash" ?> </h2>
											</div>
										</div>
									</div>
									<img src="{{url('core/public/assets/images/png/circle.png')}}" alt="img" class="img-card-circle">
								</div>
							</div>
						
							<div class="col-lg-3 col-md-6">
								<div class="card bg-transparent border border-light img-card overflow-hidden">
	
									<div class="card-body">
										<div class="d-flex">
											<div class="mr-5">
												
											</div>
											<div class="text-white mt-3">
												<p class="mb-1 font-weight-semibold fs-14 text-success"> REFERRAL BONUS </p>
																								<?php $reff = $user->ref_bal ;
																								$new_ref = $reff * $con;
																								
																								?>
												<h2 class="mt-1 mb-0 fs-30 font-weight-bold "><?php echo "$symb" ?> {{ $new_ref }}</h2>
											</div

									</div>
									<img src="{{url('core/public/assets/images/png/circle.png')}}" alt="img" class="img-card-circle">
								</div>
								</div></div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="card bg-transparent border border-light img-card overflow-hidden">
				
									<div class="card-body">
										<div class="d-flex">
											<div class="mr-5">

											</div>
											<div class="text-white mt-3">
												<p class="mb-1 font-weight-semibold fs-14 text-success"> WITHDRAWALS </p>
												<h2 class="mt-1 mb-0 fs-30 font-weight-bold ">
												    
												   
												<?php
												$total=0;
									        $total_wd = 0;
									        foreach($wd as $w)
									        {
    											$total_wd += $w->amount;
    											$total = $total_wd * $con ;
									        }
									    ?>
									     <?php echo "$symb";?><?php echo "$total"?>
									    </h2>
											</div>
										</div>
									</div>
									<img src="{{url('core/public/assets/images/png/circle.png')}}" alt="img" class="img-card-circle">
								</div>
							</div>
						</div>
						<!-- End Row -->

						
           
   
						<div class="row">
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Referal link</h3>
										</div>
										
									</div>
									<div class="card-body">
										<div class="table-responsive">
										 <a href="https://bigtreeinvest.xyz/register/{{$user->username}}" onclick="copyURI(event)" class="btn btn-dark" id="reflnk" >
                                                <!--<small>{{env('APP_URL').__('/register/').$user->username}}</small>-->
                                                Copy Link
                                            </a>  
                                            
                                            <script>
                                                function copyURI(evt) {
                                                    evt.preventDefault();
                                                    navigator.clipboard.writeText(evt.target.getAttribute('href')).then(() => {
                                                      /* clipboard successfully set */
                                                      swal("Good job!", "You copied the Link,Time to share!", "success");
                                                    }, () => {
                                                      /* clipboard write failed */
                                                    });
                                                }
                                            </script>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->
						
						<div class="row">
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">DOWNLOADS OUR APP & INSTALL</h3>
										</div>
										
									</div>
									<div class="card-body">
										<div class="table-responsive">
										 <a href="https://apk.e-droid.net/apk/app1816102.apk?v=1"  class="btn btn-success" id="reflnk" >Download</a>  
                                            

										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->
<!--social media-->
     
					



			


				
				
				@endsection
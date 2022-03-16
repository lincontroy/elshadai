<!-- app-content-->


<?php $__env->startSection('content'); ?>

         <!-- page-header -->
						<div class="page-header">
							<div class="page-leftheader">
								<h1 class="page-title">Profile</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="las la-puzzle-piece mr-2 fs-16"></i>Pages</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Profile</a></li>
								</ol>
							</div>
							<div class="page-rightheader">
								<div class="btn btn-list pr-0">
									<a href="#" class="btn btn-primary" data-toggle="tooltip" title="" data-original-title="Filter"><i class="fe fe-filter"></i> </a>
									<a href="#" class="btn btn-secondary btn-icon text-white dropdown-toggle mr-0" data-toggle="dropdown">
										<span>
											<i class="fe fe-external-link"></i>
										</span> Export <span class="caret"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right" role="menu">
										<a href="#" class="dropdown-item"><i class="bx bxs-file-pdf mr-2"></i>Export as Pdf</a>
										<a href="#" class="dropdown-item"><i class="bx bxs-file-image mr-2"></i>Export as Image</a>
										<a href="#" class="dropdown-item"><i class="bx bxs-file mr-2"></i>Export as Excel</a>
									</div>
								</div>
							</div>
						</div>
						<!-- End page-header -->

						<!-- Row -->
						
						
								<div class="card">
									<div class="card-body pb-0">
										<div class="tab-content" id="myTabContent">
											<div class="tab-pane fade active show" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
												<div class="table-responsive mb-3">
													<table class="table row table-borderless w-100 m-0">
														<tbody class="col-lg-6 p-0">
															<tr>
																<td><strong>Full Name :</strong>
																<?php
																 $user = Auth::User();
																?>
																
																<?php echo e($user->firstname); ?>  <?php echo e($user->lastname); ?></td>
															</tr>
															<tr>
																<td><strong>Location :</strong> </td>
															</tr>
															<tr>
																<td><strong>Languages :</strong> English</td>
															</tr>
															<tr>
																<td><strong>DOB :</strong>Null</td>
															</tr>
														</tbody>
														<tbody class="col-lg-6 p-0">
															<tr>
																<td><strong>Occupation :</strong> Investor</td>
															</tr>
															<tr>
																<td><strong>Website :</strong> null</td>
															</tr>
															<tr>
																<td><strong>Email :</strong> <?php echo e(Auth::user()->email); ?></td>
															</tr>
															<tr>
																<td><strong>Phone :</strong> <?php echo e(Auth::user()->phone); ?></td>
															</tr>
														</tbody>
													</table>
												</div>
												<h4><strong>About Me</strong></h4>
												<p class="description"></p>
												<div class="media-heading mt-3">
													<h4><strong>Biography</strong></h4>
												</div>
												<p></p>
												<p class="mb-4"></p>
											</div>
<div>
    <div>
											
											<!------------------------------------------------------------------------------>

						<!-- End Row -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bigtree2/public_html/core/resources/views/user/profile.blade.php ENDPATH**/ ?>
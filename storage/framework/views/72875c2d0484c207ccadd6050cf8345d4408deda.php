	<!-- row -->
					
	

  <?php $__env->startSection('content'); ?>
  <div class="container-fluid"><br>
			  		<?php if(session()->has('error')): ?>
					    <div class="alert alert-danger">
					        <?php echo e(session()->get('error')); ?>

					    </div>
					<?php endif; ?>
						<?php if(session()->has('success')): ?>
					    <div class="alert alert-success">
					        <?php echo e(session()->get('success')); ?>

					    </div>
					<?php endif; ?>

					<div class="row row-sm">
						<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
							<div class="card  box-shadow-0">
								<div class="card-header">
									<h4 class="card-title mb-1">Pay for client</h4>
									<p class="mb-2">Pay for the client of your choice</p>
								</div>
								<div class="card-body pt-0">
									<form class="form-horizontal" action="<?php echo e(url('paypost')); ?>" method="post">
										<?php echo csrf_field(); ?>
										<div class="form-group">
											<input type="text" class="form-control" name="cusername" placeholder="Client userName">
										</div>
										
										
										<div class="form-group mb-0 mt-3 justify-content-end">
											<div>
												<button type="submit" class="btn btn-primary">Pay</button>
												
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
</div>
					<?php $__env->stopSection(); ?>
					<!-- row -->
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamppp\htdocs\alizona\resources\views/user/pay.blade.php ENDPATH**/ ?>
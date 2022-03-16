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
					<?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="row row-sm">
						<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
							<div class="card  box-shadow-0">
								<div class="card-header">
									<h4 class="card-title mb-1"><?php echo e($package->package_name); ?></h4>
									<p class="mb-2">Invest in the <?php echo e($package->package_name); ?>.<br><br> Minimum investment is <b><?php echo e($package->min); ?></b>.<br><br>Maximum investment is <b><?php echo e($package->max); ?></b></p>
								</div>
								<div class="card-body pt-0">
									<form class="form-horizontal" action="<?php echo e(url('invest')); ?>" method="post">
										<?php echo csrf_field(); ?>
										<input type="hidden" name="package" value="<?php echo e($package->id); ?>">
										<div class="form-group">
											<input type="text" class="form-control" name="amount" placeholder="Amount you wish to invest in <?php echo e(Auth::user()->currency); ?>">
										</div>
										
										
										<div class="form-group mb-0 mt-3 justify-content-end">
											<div>
												<button type="submit" class="btn btn-primary">Invest</button>
												
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>

					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
			

  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamppp\htdocs\alizona\resources\views/user/package.blade.php ENDPATH**/ ?>
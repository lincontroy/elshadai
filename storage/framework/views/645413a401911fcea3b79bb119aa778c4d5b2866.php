  <?php $__env->startSection('content'); ?>

<div class="container-fluid"><br>
  <!-- row -->
				<div class="row">
					<?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="col-xs-6 col-sm-6 col-lg-6 col-xl-3">
						<div class="panel price panel-color">
							<div class="panel-heading bg-primary p-0 text-center">
								<h3><?php echo e($package->package_name); ?></h3>
							</div>
							<div class="panel-body text-center">
								<p class="lead"><strong><?php echo e($package->percent); ?>%</strong> daily</p>
							</div>
							<ul class="list-group list-group-flush text-center">
								<li class="list-group-item"><strong> Min</strong> <?php echo e($package->min); ?></li>
								<li class="list-group-item"><strong>Max </strong><?php echo e($package->max); ?></li>
								<li class="list-group-item"><strong> Duration </strong> <?php echo e($package->duration); ?> days</li>
								<li class="list-group-item"><strong> Money </strong> BackGuarantee</li>
								<li class="list-group-item border-bottom-0"><strong> 24/7</strong> support</li>
							</ul>
							<div class="panel-footer text-center">
								<a class="btn btn-primary" href="/package/<?php echo e($package->id); ?>">Invest Now</a>
							</div>
						</div>
					</div><!-- COL-END -->
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
				<!-- /row -->

			</div>

  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamppp\htdocs\alizona\resources\views/user/packages.blade.php ENDPATH**/ ?>
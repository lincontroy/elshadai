<?php $__env->startSection('content'); ?>
<br><br>
        <div class="main-panel bg-success">
            <div class="content-header bg-info text-center"><h2><b>YOUR REFERALS</b></h2></div>
            <div class="content">
              
              
              <!------------------------------------------------------->
              
              
              
              
              
              
                        
<table id="" class=" table table-stripped table-hover">
    <thead>
        <tr>                
            <th> <?php echo e(__('firstName')); ?> </th>
            <th> <?php echo e(__('Username')); ?> </th>
            <th> <?php echo e(__('phone')); ?> </th>
            <th> <?php echo e(__('st')); ?> </th>   
        </tr>
    </thead>
    <tbody>

        <?php
            // $activities = App\User::where('referal', $user->username)->orderby('id', 'desc')->get();
              $activities = App\User::where('referal', $user->username)->where('status', 1)->orderby('id', 'desc')->get();
        ?>
        <?php if(count($activities) > 0 ): ?>
            <?php $__currentLoopData = $activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>                                                            
                    <td><?php echo e($activity->firstname); ?> <?php echo e($activity->lastname); ?></td>
                    <td><?php echo e($activity->username); ?></td>
                  <td><?php echo e($activity->phone); ?></td>                                                                            
                    <td><?php echo e($activity->status); ?></td>                     
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            
        <?php endif; ?>
    </tbody>
</table>

              
   
  
            </div>
</div>
           

<?php $__env->stopSection(); ?>
            
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/motortra/nakamotoagencies.xyz/core/resources/views/user/downlines.blade.php ENDPATH**/ ?>
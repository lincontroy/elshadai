 <!-- row opened -->

 

  <?php $__env->startSection('content'); ?>
   <div class="container-fluid">
      <br>
          <div class="row row-sm row-deck">
           
            <div class="col-md-12 col-lg-12 col-xl-12">
              <div class="card card-table-two">
                <div class="d-flex justify-content-between">
                  <h4 class="card-title mb-1">Level 1</h4>
                  <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
                <span class="tx-12 tx-muted mb-3 ">This is your Level one downlines</span>
                <div class="table-responsive country-table">
                  <table class="table table-hover mb-0 text-md-nowrap">
                    <thead>
                      <tr>
                        <th class="wd-lg-25p">Username</th>
                        <th class="wd-lg-25p tx-right">Phone Number</th>
                        <th class="wd-lg-25p tx-right">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $refs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ref): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td><?php echo e($ref->username); ?></td>
                        <td class="tx-right tx-medium tx-inverse"><?php echo e($ref->phone); ?></td>
                        <td class="tx-right tx-medium tx-inverse">
                        <?php if(($ref->status)==1): ?>
                         <button class="btn btn-warning">Pending</button>

                         <?php elseif(($ref->status)==2): ?>

                        <button class="btn btn-success">Active</button>

                       

                        </td>

                        <?php endif; ?>
                       
                      </tr>

                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>



          <br>

           <div class="row row-sm row-deck">       
            <div class="col-md-12 col-lg-12 col-xl-12">
              <div class="card card-table-two">
                <div class="d-flex justify-content-between">
                  <h4 class="card-title mb-1">Level 2</h4>
                  <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
                <span class="tx-12 tx-muted mb-3 ">This is your Level two downlines</span>
                <div class="table-responsive country-table">
                  <table class="table table-hover mb-0 text-md-nowrap">
                    <thead>
                      <tr>
                        <th class="wd-lg-25p">Username</th>
                        <th class="wd-lg-25p tx-right">Phone Number</th>
                        <th class="wd-lg-25p tx-right">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $level_twos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level_two): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td><?php echo e($level_two->username); ?></td>
                        <td class="tx-right tx-medium tx-inverse"><?php echo e($level_two->phone); ?></td>
                        <td class="tx-right tx-medium tx-inverse">
                        <?php if(($level_two->status)==1): ?>
                         <button class="btn btn-warning">Pending</button>

                         <?php elseif(($level_two->status)==2): ?>

                        <button class="btn btn-success">Active</button>

                       

                        </td>

                        <?php endif; ?>
                       
                      </tr>

                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>


           <br>

           <div class="row row-sm row-deck">       
            <div class="col-md-12 col-lg-12 col-xl-12">
              <div class="card card-table-two">
                <div class="d-flex justify-content-between">
                  <h4 class="card-title mb-1">Level 3</h4>
                  <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
                <span class="tx-12 tx-muted mb-3 ">This is your Level three downlines</span>
                <div class="table-responsive country-table">
                  <table class="table table-hover mb-0 text-md-nowrap">
                    <thead>
                      <tr>
                        <th class="wd-lg-25p">Username</th>
                        <th class="wd-lg-25p tx-right">Phone Number</th>
                        <th class="wd-lg-25p tx-right">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $level_threes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level_three): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td><?php echo e($level_three->username); ?></td>
                        <td class="tx-right tx-medium tx-inverse"><?php echo e($level_three->phone); ?></td>
                        <td class="tx-right tx-medium tx-inverse">
                        <?php if(($level_three->status)==1): ?>
                         <button class="btn btn-warning">Pending</button>

                         <?php elseif(($level_three->status)==2): ?>

                        <button class="btn btn-success">Active</button>

                       

                        </td>

                        <?php endif; ?>
                       
                      </tr>

                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

           <br>

           <div class="row row-sm row-deck">       
            <div class="col-md-12 col-lg-12 col-xl-12">
              <div class="card card-table-two">
                <div class="d-flex justify-content-between">
                  <h4 class="card-title mb-1">Level 4</h4>
                  <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
                <span class="tx-12 tx-muted mb-3 ">This is your Level four downlines</span>
                <div class="table-responsive country-table">
                  <table class="table table-hover mb-0 text-md-nowrap">
                    <thead>
                      <tr>
                        <th class="wd-lg-25p">Username</th>
                        <th class="wd-lg-25p tx-right">Phone Number</th>
                        <th class="wd-lg-25p tx-right">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $level_4s; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level_4): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td><?php echo e($level_4->username); ?></td>
                        <td class="tx-right tx-medium tx-inverse"><?php echo e($level_4->phone); ?></td>
                        <td class="tx-right tx-medium tx-inverse">
                        <?php if(($level_4->status)==1): ?>
                         <button class="btn btn-warning">Pending</button>

                         <?php elseif(($level_4->status)==2): ?>

                        <button class="btn btn-success">Active</button>

                       

                        </td>

                        <?php endif; ?>
                       
                      </tr>

                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>

      <?php $__env->stopSection(); ?>
          <!-- /row -->
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamppp\htdocs\alizona\resources\views/user/affiliates.blade.php ENDPATH**/ ?>
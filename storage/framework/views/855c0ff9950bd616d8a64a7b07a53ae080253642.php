<?php $__env->startSection('content'); ?>

   
      <!-- /main-header -->

        <!-- container -->
        <div class="container-fluid">

        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
          <div class="left-content">
            <div>
              <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">Hi, welcome back! <?php echo e(Auth::user()->username); ?></h2>
             
            </div>
          </div>
          <div class="main-dashboard-header-right">
            <div>
              <label class="tx-13">Platform Ratings</label>
              <div class="main-star">
                <i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star"></i> <span>(0)</span>
              </div>
            </div>
            <div>
              <label class="tx-13">Online users</label>
              <h5>
                
                <?php
                $min=1;
                $max=App\User::count();
                echo rand($min,$max);
              ?>

              </h5>
            </div>
            <div>
              <label class="tx-13">Offline Sales</label>
              <h5>0</h5>
            </div>
          </div>
        </div>
        <!-- breadcrumb -->

          <!-- row -->
          <div class="row row-sm">
            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
              <div class="card overflow-hidden sales-card bg-primary-gradient">
                <div class="ps-3 pt-3 pe-3 pb-2 pt-0">
                  <div class="">
                    <h6 class="mb-3 tx-12 text-white">Expenditure</h6>
                  </div>
                  <div class="pb-0 mt-0">
                    <div class="d-flex">
                      <div class="">
                        <h4 class="tx-20 fw-bold mb-1 text-white"><?php echo e(Auth::user()->currency); ?>


                          <?php
                          $expenditure=App\Expenditure::where('user_id',Auth::user()->id)->sum('amount');

                          echo $expenditure;
                          ?>
                         </h4>
                        <p class="mb-0 tx-12 text-white op-7">Compared to last week</p>
                      </div>
                      <span class="float-end my-auto ms-auto">
                        <i class="fas fa-arrow-circle-up text-white"></i>
                        <span class="text-white op-7"> +0</span>
                      </span>
                    </div>
                  </div>
                </div>
                <span id="compositeline" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
              <div class="card overflow-hidden sales-card bg-danger-gradient">
                <div class="ps-3 pt-3 pe-3 pb-2 pt-0">
                  <div class="">
                    <h6 class="mb-3 tx-12 text-white">Investment Earnings</h6>
                  </div>
                  <div class="pb-0 mt-0">
                    <div class="d-flex">
                      <div class="">
                        <h4 class="tx-20 fw-bold mb-1 text-white"><?php echo e(Auth::user()->currency); ?> 0</h4>
                        <p class="mb-0 tx-12 text-white op-7">Compared to last week</p>
                      </div>
                      <span class="float-end my-auto ms-auto">
                        <i class="fas fa-arrow-circle-down text-white"></i>
                        <span class="text-white op-7"> -23.09%</span>
                      </span>
                    </div>
                  </div>
                </div>
                <span id="compositeline2" class="pt-1">3,2,4,6,12,14,8,7,14,16,12,7,8,4,3,2,2,5,6,7</span>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
              <div class="card overflow-hidden sales-card bg-success-gradient">
                <div class="ps-3 pt-3 pe-3 pb-2 pt-0">
                  <div class="">
                    <h6 class="mb-3 tx-12 text-white">Balance</h6>
                  </div>
                  <div class="pb-0 mt-0">
                    <div class="d-flex">
                      <div class="">
                        <h4 class="tx-20 fw-bold mb-1 text-white"><?php echo e(Auth::user()->currency); ?>  <?php echo e(Auth::user()->wallet); ?></h4>
                        <p class="mb-0 tx-12 text-white op-7">Compared to last week</p>
                      </div>
                      <span class="float-end my-auto ms-auto">
                        <i class="fas fa-arrow-circle-up text-white"></i>
                        <span class="text-white op-7"> 52.09%</span>
                      </span>
                    </div>
                  </div>
                </div>
                <span id="compositeline3" class="pt-1">5,10,5,20,22,12,15,18,20,15,8,12,22,5,10,12,22,15,16,10</span>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
              <div class="card overflow-hidden sales-card bg-warning-gradient">
                <div class="ps-3 pt-3 pe-3 pb-2 pt-0">
                  <div class="">
                    <h6 class="mb-3 tx-12 text-white">Referral Earnings</h6>
                  </div>
                  <div class="pb-0 mt-0">
                    <div class="d-flex">
                      <div class="">
                        <h4 class="tx-20 fw-bold mb-1 text-white"><?php echo e(Auth::user()->currency); ?> 

                          <?php
                          $earnings=App\Earnings::where('user_id',Auth::user()->id)->sum('amount');

                          echo $earnings;


                          ?>
                        </h4>
                        <p class="mb-0 tx-12 text-white op-7">Compared to last week</p>
                      </div>
                      <span class="float-end my-auto ms-auto">
                        <i class="fas fa-arrow-circle-down text-white"></i>
                        <span class="text-white op-7"> -152.3</span>
                      </span>
                    </div>
                  </div>
                </div>
                <span id="compositeline4" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
              </div>
            </div>
          </div>
          <!-- row closed -->

         


            <!-- row opened -->
          <div class="row row-sm row-deck">
           
            <div class="col-md-12 col-lg-12 col-xl-12">
              <div class="card card-table-two">
                <div class="d-flex justify-content-between">
                  <h4 class="card-title mb-1">My referal Link</h4>
                  <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
                <span class="tx-12 tx-muted mb-3 ">This is your referal link, Copy to share</span>
                <div class="table-responsive country-table">
                  <table class="table table-striped table-bordered mb-0 text-sm-nowrap text-lg-nowrap text-xl-nowrap">
                    <thead>
                      <tr>
                        <th  class="wd-lg-25p">
                          Link
                        </th>
                        <th  class="wd-lg-25p">
                          Button
                        </th>
                      </tr>
                  

                  </thead>

                   <tbody>
                      <tr>
                       
                        <td class="tx-left tx-medium tx-inverse"><a href="<?php echo e(url('/i/am/')); ?>/<?php echo e(Auth::user()->username); ?>" ><?php echo e(url('/i/am/')); ?>/<?php echo e(Auth::user()->username); ?></a></td>

                        <td class="tx-right tx-medium tx-inverse"><a href="<?php echo e(url('/i/am/')); ?>/<?php echo e(Auth::user()->username); ?>" class="btn btn-info" onclick="copyURI(event)">Copy</a></td>


                       
                      </tr>

                      <script type="text/javascript">
                        function copyURI(evt) {
                          evt.preventDefault();
                          navigator.clipboard.writeText(evt.target.getAttribute('href')).then(() => {
                            /* clipboard successfully set */
                            swal("Good job!", "Your Link was copied!", "success");

                          }, () => {
                            /* clipboard write failed */
                            swal("Ooops!", "An error occured!", "error");

                          });
                      }

                      </script>
                      
                    </tbody>

                </table>
              </div>
              </div>
            </div>
          </div>
          <!-- /row -->
          <!-- row opened -->
          <div class="row row-sm row-deck">
           
            <div class="col-md-12 col-lg-12 col-xl-12">
              <div class="card card-table-two">
                <div class="d-flex justify-content-between">
                  <h4 class="card-title mb-1">Your Most Recent Investments</h4>
                  <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
                <span class="tx-12 tx-muted mb-3 ">This is your investments breakdown</span>
                <div class="table-responsive country-table">
                  <table class="table table-striped table-bordered mb-0 text-sm-nowrap text-lg-nowrap text-xl-nowrap">
                    <thead>
                      <tr>
                        <th class="wd-lg-25p">Package</th>
                        <th class="wd-lg-25p tx-right">Investment amount</th>
                        <th class="wd-lg-25p tx-right">Returns</th>
                        <th class="wd-lg-25p tx-right">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Silver</td>
                        <td class="tx-right tx-medium tx-inverse">KES 20000</td>
                        <td class="tx-right tx-medium tx-inverse">KES 25000</td>
                        <td class="tx-right tx-medium tx-danger">Complete</td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- /row -->
        </div>
        <!-- /Container -->
      
      <!-- /main-content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamppp\htdocs\alizona\resources\views/user/index.blade.php ENDPATH**/ ?>
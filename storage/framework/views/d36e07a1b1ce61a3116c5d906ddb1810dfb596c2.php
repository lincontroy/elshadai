<!-- app-content-->


<?php $__env->startSection('content'); ?>




      <br>
       
            <?php
            $nji=$user->lastname;
            
            ?>
            
            
					        
          
     
                             
             <div class="row">
                        <div class="col-xl-12">
								<div class="card card-counter bg-gradient-default">
								     <div class="card-header">KENYAN || CONGO DEPOSIT</div>
									<div class="card-body">
										<div class="row">
											
											<div class="col-8 text-center">
												<div class="mt-4 mb-0 text-success">
													<code>USE TILL</code>: 9077883
													
													<p class="text-danger mt-1"></p>			</div>	
													
													</div>
													
											<hr><hr>
										<span class="alert"><a href="https://tinypesa.com/bigtreeinvest.xyz"><code>Click here To Deposit Using STK</code></a></span>
										</div>
											<hr><hr>
										
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							</div>
					        
					     
                    
                      <div class="row">
                        <div class="col-xl-12">
								<div class="card card-counter bg-gradient-default">
								    <div class="card-header">RWANDA || TANZANIA || UGANDA ||CONGO</div>
									<div class="card-body">
										<div class="row">
										
											<div class="col-8 text-center">
												<div class="mt-4 mb-0 text-success">
													<h1 class="btn btn-link mb-0"> DEPOSIT BY SENDING TO MPESA; </h1><br>
													<h2 class="btn btn-link mb-0"> MPESA NUMBER : </h2>+254112414043<br>
													<p class="text-danger mt-1">send directly from tigo, airtel, and any other network</p>
												</div> 
												
												
											</div>
										</div>
									</div>
								</div>
							</div>
							</div>
					        
					        
					        
					                            
                      <div class="row">
                        <div class="col-xl-12">
								<div class="card card-counter bg-gradient-default">
								    <div class="card-header"> WHATSAPP GROUP</div>
									<div class="card-body">
										<div class="row">
										
											<div class="col-8 text-center">
												<div class="mt-4 mb-0 text-success">
													<h1 class="btn btn-link mb-0">  Join Our Official Group </h1><br>
													<h2 class="btn btn-link mb-0"> : </h2><br>https://chat.whatsapp.com/CyphndzZYBeLD52LJK1bjo

										
		<p class="text-danger mt-1">send directly to this airtel account</p>
												</div> 
												
												
											</div>
										</div>
									</div>
								</div>
							</div>
							</div>


 
  <!--=================================================-->
 
                 

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title"><?php echo e(__('Deposit History')); ?></div>
                                </div>
                                <div class="card-body pb-0">
                                    <?php
                                        $deps = App\deposits::where('user_id', $user->id)->orderby('id', 'desc')->paginate(10);
                                    ?>                                                   
                                                
                                    <div class="table-responsive">
                                        <table class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>  
                                                <th><?php echo e(__('Amount')); ?></th>        
                                                <th><?php echo e(__('Method')); ?></th>
                                                <th><?php echo e(__('Account')); ?></th>
                                                <th><?php echo e(__('Acc Name')); ?></th>
                                                <th><?php echo e(__('Date')); ?></th>
                                                <th><?php echo e(__('Status')); ?></th>
                                                <th><?php echo e(__('Url')); ?></th>                                                                        
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php if(count($deps) > 0 ): ?>
                                                <?php $__currentLoopData = $deps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr> 
                                                        <td><?php echo e($settings->currency); ?> <?php echo e($dep->amount); ?></td>     
                                                        <td><?php echo e($dep->bank); ?></td>
                                                        <td>
                                                           <?php echo e($dep->account_no); ?>

                                                        </td>
                                                        <td>
                                                           <?php echo e($dep->account_name); ?>

                                                        </td>
                                                        <td><?php echo e($dep->created_at); ?></td>
                                                        <td>
                                                            <?php if($dep->status == 0): ?>
                                                                Pending
                                                            <?php elseif($dep->status == 1): ?>
                                                                Approved
                                                            <?php elseif($dep->status == 2): ?>
                                                                Rejected
                                                            <?php endif; ?>
                                                        </td> 
                                                        <td>
                                                            <?php if($dep->bank == 'BTC'): ?>
                                                                <?php if($dep->account_name == 'Coin Base'): ?>
                                                                    <a href="<?php echo e(route('coinbase.confirm', ['id' => $dep->pop])); ?>" target="_blank" class="btn btn-info">Check</a>
                                                                <?php else: ?>
                                                                    <a href="<?php echo e(route('btc.confirm', ['id' => $dep->account_name])); ?>" target="_blank" class="btn btn-info">Check</a>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        </td>                                                                       
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                <tr>                                                            
                                                    <td colspan="6"><?php echo e(__('No data')); ?></td>                                        
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                    <div>
                                        <?php echo e($deps->links()); ?>

                                    </div>           
                                    <br><br>  
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
           
           
            </div>
            
<?php $__env->stopSection(); ?>
            
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamppp\htdocs\alizona\resources\views/user/load_wallet.blade.php ENDPATH**/ ?>
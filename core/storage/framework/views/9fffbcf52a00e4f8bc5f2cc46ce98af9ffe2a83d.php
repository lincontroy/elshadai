<br><br>
<?php $__env->startSection('content'); ?>
      
      <?php
											$general_cash= ($user->wallet);
											$country = ($user->lastname);
											$symb = 'KSH';
											$constant = 1;
											$ret = 1;
                                                switch ($country) {
                                                  case "KENYA":
                                                      
                                                     $new_cash = $general_cash;
                                                     $symb= 'KSH';
                                                     	$constant = 1;
                                                     	$ret = 1;
                                                    break;
                                                    
                                                  case "RWANDA":
                                                    $new_cash = $general_cash * 10;
                                                     $symb = 'RWF';
                                                     	$constant = 0.1;
                                                     	$ret = 10;
                                                    break;
                                                    
                                                  case "TANZANIA":
                                                    $new_cash = $general_cash * 20;
                                                     $symb = 'TZ';
                                                     	$constant = 0.2;
                                                     	$ret = 20;
                                                    break;
                                                  case "UGANDA":
                                                    $new_cash = $general_cash * 32;
                                                     $symb = 'UG';
                                                     	$constant = 0.32;
                                                     	$ret = 32;
                                                    break;
                                                    
                                                  default:
                                                      $ret = 0.01;
                                                    $new_cash = $general_cash * 0.01;
                                                    $symb = '$';
                                                    $constant = 100;
                                                }
                                        	?>
        
        
        <!--remove downlines after withdrwal-->
        
    

        
        
                                            <?php
                                                    $activities = App\withdrawal::where('user_id', $user->id)->where('status', 'Approved')->orderby('id', 'desc')->get();
                                                ?>
                                                <?php if(count($activities) >= 1 ): ?>
                                               
                                             <?php
                                       
                                             
 
                                                    $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                                                     
                                                    function generate_string($input, $strength = 8) {
                                                        $input_length = strlen($input);
                                                        $random_string = '';
                                                        for($i = 0; $i < $strength; $i++) {
                                                            $random_character = $input[mt_rand(0, $input_length - 1)];
                                                            $random_string .= $random_character;
                                                        }
                                                     
                                                        return $random_string;
                                                    }
                                                     
                                                    // Output: iNCHNGzByPjhApvn7XBD
                                                    $key = generate_string($permitted_chars, 20);
                                                     $user_id = $user->id;
                                                    //db conn
                                                 $servername = "localhost";
                                                $username = "motortra_motor";
                                                $password = "motortra_motor";
                                                $dbname = "motortra_motor";
                                                
                                                // Create connection
                                                $conn = mysqli_connect($servername, $username, $password, $dbname);
                                                // Check connection
                                                if (!$conn) {
                                                  die("Connection failed: " . mysqli_connect_error());
                                                }
                                                
                                               
                                                
                                                $sql = "UPDATE users SET username ='$key' WHERE id=$user_id";
                                              // $sql = "UPDATE users SET usr ='$key' WHERE id=$user_id";
                                                
                                                
                                                if (mysqli_query($conn, $sql)) {
                                                 
                                                 // header("Location: ./dashboard");
                                                } else {
                                                  echo "Error updating record: " . mysqli_error($conn);
                                                }
                                                
                                                mysqli_close($conn);
                                             
                                             //end of db
                                                     
                                                    ?>
                                               <br><br>
                                                <div class="alert alert-success">
                                               <strong> CONGRATULATION FOR QUALIFYING TO CASHOUT!</strong> <br>Your referal link always changes when you have any previous Approved withdrawal and you refresh this page!!copy and get back to marketing to earn more .
                                                </div>
                                               
                                                <?php else: ?>
                                                
                                                 <div class="alert alert-warning">
                                               <strong> CONGRATULATION FOR JOINING US!</strong><br> We really appriciate your trust on us that that you were able to work hard and make it happen by trusting us always invite to cashout!.
                                                            </div>
                                              
                                                <?php endif; ?>
                                                
        
      
        
        <!--end-->
        
        
        
        
        
        
        
        
        
            <!--process user withdrawal-->
            <br><br>
            	<div class="col-md-12">
								
									<div class="card">
									<div class="card-header bg-warning">
										<div >
											<h3 class="card-title">Withdraw Account Balance </h3>
										</div>
<?php

$mark =  env('REF_COUNT'); 


?>
									</div>
									
									 <?php
									 
									 
                                                    $downlines = App\User::where('referal', $user->username)->where('status', 1)->orderby('id', 'desc')->get();
                                                ?>
                                                <?php if(count($downlines) >= $mark ): ?>
                                                   	<div class="card-body">
										<div class="row">
											<div class="col-xl-12">
											    <form action="/user/wallet/wd" name="myform" onsubmit="DoSubmit();" method="post">
											   <?php $user=Auth::user();?>
											        <?php echo csrf_field(); ?>
											        
											        <div class="form-group">
													<input type="text" class="form-control" value=" <?php echo $symb; " ";echo  $new_cash;?>" readonly>
												</div>
												<!--<div class="form-group">-->
												<!--	<input type="text" class="form-control" name="amt" placeholder="Amount">-->
												<!--</div>-->
												<div class="form-group">
													<input type="text" class="form-control" id="amt" name="amt" value="1" placeholder="Amount">
												</div>
												
												<div class="form-group">
													<input type="text" class="form-control" name="bank" value="<?php echo $user->phone?> " readonly>
												</div>
												
												
												<button type="submit" class="btn btn-info float-left">Withdraw</button>
												
												</form>
											</div>
										
										</div>
									</div>
									
							
                                                   
                                                <script>
                                               
                                                  function DoSubmit(){
                                                     
                                                      var cashed = document.getElementById('amt').value * <?php echo "$constant"?>; 
                               
                                                      document.myform.amt.value = cashed ;
                                                      
                                                      return true;
                                                    }
                                                 
                                                </script>
                                                
                                                
                                                
                                                
                                                
                                                   
                                                   
                                                <?php else: ?>
                                                
                                                
                                                	<div class="card-body">
										<div class="row">
											<div class="col-xl-12">
											    <form 
											    
											    method="post">
											   <?php $user=Auth::user();?>
											        <?php echo csrf_field(); ?>
											        
											        <div class="form-group">
													<input type="text" class="form-control" value=" <?php echo $symb; " ";echo $user->wallet;?>" readonly>
												</div>
												<div class="form-group">
													<input type="text" value="invite atleast 2 to withdraw" class="form-control" name="amt" placeholder="Amount" readonly>
												</div>
												<div class="form-group">
													<input type="text" class="form-control" name="bank" value="*********" readonly>
												</div>
												
												

												
												</form>
											</div>
										
										</div>
									</div>
                                                   
                                                    
                                                    
                                                    
                                                <?php endif; ?>  
                                                
									
									
								
								</div>
							</div>
            <div class="content">
               
                <div class="page-inner mt--5">
                 
                    <div id="prnt"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-head-row">
                                        <div class="card-title"><?php echo e(__('Withdrawal History')); ?></div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">                                        
                                        <table id="basic-datatables" class="display table table-striped table-hover" >
                                            <thead>
                                                <tr>                                                   
                                                    <th><?php echo e(__('Date')); ?></th> 

                                                    <th><?php echo e(__('Account')); ?></th>
                                                    <th><?php echo e(__('Amount')); ?></th>                                                   
                                                    <th><?php echo e(__('Status')); ?></th>                                  
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $activities = App\withdrawal::where('user_id', $user->id)->orderby('id', 'desc')->get();
                                                ?>
                                                <?php if(count($activities) > 0 ): ?>
                                                    <?php $__currentLoopData = $activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><?php echo e($activity->created_at); ?></td>
                                                           
                                                            <td><?php echo e($activity->account); ?></td>
                                                            <td><?php echo "$symb"; ?><?php echo e($activity->amount * $ret); ?></td>
                                                            <td><?php echo e($activity->status); ?></td>
                                                                                 
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php else: ?>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
<?php $__env->stopSection(); ?>
            
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/motortra/futuregain.xyz/core/resources/views/user/withdrawal.blade.php ENDPATH**/ ?>
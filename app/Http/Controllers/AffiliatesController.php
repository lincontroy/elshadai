<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use App\InvPackages;
use App\Investments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class AffiliatesController extends Controller
{
    //

    public function profile(){
    	return view('user.profile');
    }

    public function payforclient(){

    	//get the client name
    	return view('user.pay');


    } 


  public function showpackages(){


    $packages=InvPackages::all();

    return view('user.packages')->with(compact('packages'));

  }

  public function showpackage(Request $request){

  		$id=$request->id;

  		$packages=InvPackages::where('id',$id)->get();

  		return view('user.package')->with(compact('packages'));

  }

  public function invest(Request $request){
  	//get the package id 

  	$package=$request->package;
  	$amount=$request->amount;

  	//check the min and maximum of this packahe

  	$packageinfo=InvPackages::where('id',$package)->first();

  	$package_min=$packageinfo->min;
  	$package_max=$packageinfo->max;

  	$percent=$packageinfo->percent;
  	//check if users balance is greater than min
  	$user_balance=Auth::user()->wallet;
  	if($amount>$user_balance){
  		//user has less balance
  		return redirect()->back()->with('error', 'You have Insufficient balance in your wallet!');



  	}else{

  		//this user has sufficient balance

  		//check if the amount is between the maximum and minimum
  		if($amount>$package_max){
  			$message="The maximum you can invest for this package is ".$package_max;
  			return redirect()->back()->with('error', $message);
  		}else{

  			//cut the balance from user balance and place the invstment

  			$newbalance=$user_balance-$amount;

  			$user=User::where('id',Auth::user()->id)->update(["wallet"=>$newbalance]);

  			$inv=new Investments();

  			$inv->user_id=Auth::user()->id;

  			$inv->package_id=$package;

  			$inv->capital=$amount;

  			$daily=($percent/100)*($amount);

  			$inv->daily=$daily;

  			$inv->earnings=0;

  			$inv->status=1;

  			$days=Carbon::now()->addDays($packageinfo->duration)->format('Y-m-d H:i:s');

  			// $days=Carbon::now()->format('Y-m-d H:i:s');

  			$inv->end_date=$days;

  			if($inv->save()){
  				$message="Your Investment was placed successfully";
  				return redirect()->back()->with('success', $message);
  			}else{
  				$message="An error occured";
  				return redirect()->back()->with('error', $message);
  			}

  		}

  	}

  }


    public function pay(Request $request){

    	$username=$request->cusername;

    	//check if the username is available in the database

    	$check=User::where('username',$username)->first();

    	if(($check)){
    		$authbalance=Auth::user()->wallet;

    		$reg=env('Activation_amount');

    		$bill="fp#".$check->id;

    		if($authbalance>=$reg){

    			$url=env('APP_URL')."/api/v1/response";

				$data=array(
					 "TransactionType"=>"PayBill",
					  "TransID"=>"PBD7MAJUGF",
					  "TransTime"=>"20210213003607",
					  "TransAmount"=>"450.00",
					  "BusinessShortCode"=>"4070303",
					  "BillRefNumber"=>$bill,
					  "InvoiceNumber"=>"0",
					  "ThirdPartyTransID"=>"0",
					  "MSISDN"=>"254720895177",
					  "FirstName"=>Auth::user()->firstname,
					  "MiddleName"=>"Doe",
					  "LastName"=>Auth::user()->lastname	
    			);

    			$postdata = json_encode($data);
				// $ch = curl_init($url);
				// curl_setopt($ch,CURLOPT_URL, $url);
				// curl_setopt($ch,CURLOPT_POST, 1);
				// curl_setopt($ch,CURLOPT_POSTFIELDS, $postdata);
				// curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
				// $result = curl_exec($ch);
				// curl_close ($ch);

				$result=app('App\Http\Controllers\ApiController')->requesting($postdata);



				// return $url;

				
				if($result){
		        	$newbalance=$authbalance-env('Activation_amount');

    				$update=User::where('id',Auth::user()->id)->update(['wallet'=>$newbalance]);
		        	toastr()->success('User activated successfully!')->with('success', 'Action was successfully triggered');
  					return redirect()->back();
		        }else{
		        	toastr()->error('An error occured!');
  					return redirect()->back()->with('error', $postdata);
		        }
    		}else{
    			//record not found
    		toastr()->error('Insufficinet funds!');
  			return redirect()->back()->with('error', 'Insufficinet funds!!');
    		}
    	}else{
    		//record not found
    		toastr()->error('No record found!');
  			return redirect()->back()->with('error', 'No record found!');

    	}
    }

    public function profileupdate(Request $request){

    	

  /*
  talk the select file and move it public directory and make avatars
  folder if doesn't exsit then give it that unique name.

  */
  		$bio=$request->bio;

  		if ($request->hasFile('user_photo')) {
  		$photoName = time().'.'.$request->user_photo->getClientOriginalExtension();

  		$request->user_photo->move(public_path('img/profile'), $photoName);
  		$update=User::where('id',Auth::user()->id)->update(['bio'=>$bio,'img'=>$photoName]);
  		if($update){
  			toastr()->success('Profile saved successfully!');
  			return redirect()->back();
  		}else{
  			toastr()->error('An error occured!');
  			return redirect()->back();
  		}
  		

  		}else{

  			$update=User::where('id',Auth::user()->id)->update(['bio'=>$bio]);
  			toastr()->success('Profile saved successfully!');
  			return redirect()->back();
  		}

  		


  		



    }

    public function showaffiliates()
    {
    	# get my ref body
    	 $refs=User::where('referal',Auth::user()->username)->get();


    	 //Level two
    	 $level_twos=array();
    	 $level_threes=array();
    	 $level_4s=array();

    	 foreach ($refs as $ref) {
    	 	# code...
    	 	$level_twos=User::where('referal',$ref->username)->get();

    	 	foreach ($level_twos as $level_two) {
    	 		# code...
    	 			$level_threes=User::where('referal',$level_two->username)->get();

    	 			foreach ($level_threes as $level_three) {
    	 				# code...
    	 				 $level_4s=User::where('referal',$level_three->username)->get();

    	 			}

    	 	}

    	 }








    	  //get my direct donwnline
    	  return view('user.affiliates')->with(compact('refs','level_twos','level_threes','level_4s'));


    }
}

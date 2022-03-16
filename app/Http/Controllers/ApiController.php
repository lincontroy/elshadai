<?php

namespace App\Http\Controllers;
use App\Activations;
use App\User;
use App\Earnings;
use App\Expenditure;
use App\InvPackages;
use App\Investments;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Jobs\Investment;

class ApiController extends Controller
{
    //

    public function cron(){

        $today = new Carbon();
        if(!(($today->dayOfWeek == Carbon::SATURDAY) || ($today->dayOfWeek == Carbon::SUNDAY))){

            //get all active investments
            $investments=Investments::where('status',1)
            ->whereDate('updated_at','!=',Carbon::now()->format('Y:m:d'))
            ->get();
          
          // return $investments;

            foreach ($investments as $investment) {

                if(($investment->running_days!=50)){
                     $dispatcher=new Investment($investment->id,$investment->daily,$investment->earnings,$investment->status,$investment->running_days,$investment->running_time,$investment->end_date,$investment->created_at);

                    dispatch($dispatcher); 
                }else{

                    $update=Investments::where('id',$investment->id)->update(['status'=>2]);

                }

                 
            }

         
           
            

        }else{
         $date = new Carbon('last thursday');
        }

    }

    public function requesting(Request $request){



    $logFile = "M_PESAConfirmationResponse.txt";
    
    $log = fopen($logFile, "a");
    
    fwrite($log, $request);
    
    fclose($log);
    
   
    $TransactionType     =  $request['TransactionType'];
    $TransID          =$request['TransID'];
    $TransTime           = $request['TransTime'];
    $TransAmount          = $request['TransAmount'];
    $BillRefNumber       = $request['BillRefNumber'];
    $InvoiceNumber       = $request['InvoiceNumber'];
    $ThirdPartyTransID   = $request['ThirdPartyTransID'];
    $MSISDN            = $request['MSISDN'];
    $FirstName          = $request['FirstName'];
    $MiddleName         = $request['MiddleName'];
    $LastName            = $request['LastName'];
    
    //get the accouunt id 

    $account=explode("#", $BillRefNumber);

    $account_id=$account[1];

    //insert this data in activations table




    //check if the ID is available in the database
    $checker=User::where('id',$account_id)
    ->where('status',1)
    ->first();

    $activation_fee=env('Activation_amount');

    //if count is greater than 1 then the record is available

    if(($checker) && ($TransAmount>=$activation_fee)){

        //add this record to the activations record

        $activations= new Activations();

        $activations->user_id=$account_id;

        $activations->amount=$TransAmount;

        $checker->update(['status'=>2]);

        if($activations->save() && $checker){

            //check if the user has an affiliate and award the affiliate

            //add the earning on the earnings table for the referal

            $c=User::where('username',$checker->referal)->first();

            $expenditure= new Expenditure();

            $expenditure->user_id=$account_id;

            $expenditure->amount=$TransAmount;

            $expenditure->Purpose="Account activation";

            $expenditure->save();

            // $ref=$c->ref_bal;

            $level_one=env('level_one');

            $ref=$c->ref_bal+$level_one;

            $wallet=$c->wallet+$level_one;

            $c->update(['ref_bal'=>$ref,'wallet'=>$wallet]);

            $earnings=new Earnings();

            $earnings->user_id=$c->id;

            $earnings->type="Level one Earnings";

            $earnings->amount=$level_one;

            $earnings->from_user=$checker->id;


            $earnings->save();


            //check and earn level two 


            $level_referer=$c->referal;

            $second=User::where('username',$level_referer)->first();


            $second_balance=$second->ref_bal;

            $second_balance=$second_balance+env('level_two');

            $wallet=$second->wallet+env('level_two');

            $c->update(['ref_bal'=>$second_balance,'wallet'=>$wallet]);


            $earnings->user_id=$second->id;

            $earnings->type="Level two Earnings";

            $earnings->amount=env('level_two');

            $earnings->from_user=$account_id;


            $earnings->save();


            //check for Level three earnings


            $level_referer=$second->referal;

            $third=User::where('username',$level_referer)->first();

            $third_balance=$third->ref_bal;

            $third_balance=$third_balance+env('level_three');

            $wallet=$third->wallet+env('level_two');

            $c->update(['ref_bal'=>$third_balance,'wallet'=>$wallet]);


            $earnings->user_id=$third->id;

            $earnings->type="Level three Earnings";

            $earnings->amount=env('level_three');

            $earnings->from_user=$account_id;


            $earnings->save();

            //check for Level four earnings

            $level_referer=$third->referal;

            $fourth=User::where('username',$level_referer)->first();

            $fourth_balance=$fourth->ref_bal;

            $fourth_balance=$fourth_balance+env('level_four');

            $wallet=$fourth->wallet+env('level_two');

            $c->update(['ref_bal'=>$fourth_balance,'wallet'=>$wallet]);

            $earnings->user_id=$fourth->id;

            $earnings->type="Level four Earnings";

            $earnings->amount=env('level_four');

            $earnings->from_user=$account_id;


            $earnings->save();








            return response()->json("Records added",201);

        }else{
            return response()->json("An errro occred",500);
        }




    }else{

        return response()->json("Record not found",200);
    }



    
    return response()->json($account_id,200);
    }
    
}

<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;
use Illuminate\Contracts\Encryption\DecryptException;
use  SmsHelpers;

class ApplicationController extends Controller
{
    public function applicationSend($id)
    {
        try{
            $id = decrypt($id);
        }catch(DecryptException $e) {
            return redirect()->back();
        }

        return view('website.applynow',compact('id'));
    }

    public function apply(Request $request)
    {
        $request->validate([
            'course' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => ['required','digits:10','numeric'],
            'qualification' => 'required',
            'address' => 'required',
        ]);

        try{
            $course_id = decrypt($request->input('course'));
        }catch(DecryptException $e) {
            return redirect()->back();
        }

        $student_id = DB::table('applications')
            ->insertGetId([
                'name' => $request->input('name'),
                'mobile' => $request->input('mobile'),
                'email' => $request->input('email'),
                'qualification' => $request->input('qualification'),
                'address' => $request->input('address'),
                'course_id' => $course_id,
                'created_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
                'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
            ]);
        
        $request_info = urldecode("Dear ".$request->input('name').", Thanks For Registering For The Course , To Confirm Your Enrollement Please P an Amount of Rs. 500.00. For Any Query Feel Free To Contact Us 9101752106 Thank you");
        SmsHelpers::smsSend($request->input('mobile'),$request_info);
        return view('website.confirm',compact('student_id','course_id'));
    }

    public function payEnrollFee($student_id,$course_id)
    {
        try{
            $student_id = decrypt($student_id);
            $course_id = decrypt($course_id);
        }catch(DecryptException $e) {
            return redirect()->back();
        }

        $student = DB::table('applications')->where('id',$student_id)->first();

        $total_cost =  500;
        $user_name = $student->name;
        $user_email = $student->email;
        $user_mobile = $student->mobile;

        $api = new \Instamojo\Instamojo(
            config('services.instamojo.api_key'),
            config('services.instamojo.auth_token'),
            config('services.instamojo.url')
        );

        try {
            $response = $api->paymentRequestCreate(array(
                "purpose" => "FreashesIt Course Enrollment Fees",
                "amount" => $total_cost,
                "buyer_name" => $user_name,
                "send_email" => true,
                "email" => $user_email,
                "phone" => $user_mobile,
                "redirect_url" => route('web.pay_success',['student_id'=>encrypt($student_id),'course_id'=>encrypt($course_id)]),
                ));

            DB::table('applications')
                ->where('id',$student_id)
                ->update([
                    'payment_request_id' => $response['id'],
                    'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
                ]);
                
            header('Location: ' . $response['longurl']);
            exit();
        }catch (Exception $e) {
            print('Error: ' . $e->getMessage());
        }
    }

    public function paySuccess($student_id,$course_id)
    {
        try{
            $student_id = decrypt($student_id);
            $course_id = decrypt($course_id);
        }catch(DecryptException $e) {
            return redirect()->back();
        }

        try {
    
            $api = new \Instamojo\Instamojo(
                config('services.instamojo.api_key'),
                config('services.instamojo.auth_token'),
                config('services.instamojo.url')
            );
     
            $response = $api->paymentRequestStatus(request('payment_request_id'));
     
            if( !isset($response['payments'][0]['status']) ) {
             return redirect('website.Home');
            } else if($response['payments'][0]['status'] != 'Credit') {
             return redirect('website.Home');
            } 
          }catch (\Exception $e) {
             return redirect('website.Home');
         }
        
        if($response['payments'][0]['status'] == 'Credit') { 
            DB::table('applications')
                ->where('id',$student_id)
                ->update([
                    'payment_id' => $response['id'],
                    'payment_status'=>2,
                    'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
                ]);
            $student = DB::table('applications')->where('id',$student_id)->first();
            
            $request_info = urldecode("You Have Successfully Paid an Amount of Rs. 500.00. Transaction Id is ".$response['id']." . For Any Query Feel Free To Contact Us 9101752106 Thank you");
            SmsHelpers::smsSend($student->mobile,$request_info);
            return view('website.about-us');
        }else{
            return view('website.about-us');
        }
        
    }
}

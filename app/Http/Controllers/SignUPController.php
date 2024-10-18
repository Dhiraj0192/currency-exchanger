<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SignUP;
use App\Models\EmailVerification;
use Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Mail;

class SignUPController extends Controller
{
    public function signup(){
        return view('signup');
    }

    public function studentRegister(Request $request)
    {
       $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'number' => 'required|numeric',
            'password' =>'required|string|min:8',
            'panimages'=>'required|mimes:pdf',
            'bankimages'=>'required|mimes:pdf'
        ]);

        $adharfilename = time().".pp.".$request->file('adharimages')->getClientOriginalExtension();
        $request->file('adharimages')->move(public_path('/images/AdharCardFile'),$adharfilename);

        $panfilename = time().".pp.".$request->file('panimages')->getClientOriginalExtension();
        $request->file('panimages')->move(public_path('/images/PanCardFile'),$panfilename);

        $bankfilename = time().".pp.".$request->file('bankimages')->getClientOriginalExtension();
        $request->file('bankimages')->move(public_path('/images/BankStatementFile'),$bankfilename);

        $user = new SignUP();
        $user->fullname = $request->fullname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->number = $request->number;
        $user->adharcard = $adharfilename;
        $user->pancard = $panfilename;
        $user->bankstatement = $bankfilename;
        $user->save();

        return redirect("/verifyotp/".$user->id);
    }

    public function loadLogin()
    {
        if(Auth::user()){
            return redirect('/exchange');
        }
        return view('signin');
    }

    public function sendOtp($user)
    {
        $otp = rand(100000,999999);
        $time = time();

        EmailVerification::updateOrCreate(
            ['email' => $user->email],
            [
            'email' => $user->email,
            'otp' => $otp,
            'created_at' => $time
            ]
        );

        $data['email'] = $user->email;
        $data['title'] = 'Mail Verification';

        $data['body'] = 'Your OTP is:- '.$otp;

        Mail::send('mailVerification',['data'=>$data],function($message) use ($data){
            $message->to($data['email'])->subject($data['title']);
        });
    }

    public function loadDashboard()
    {
        if(Auth::user()){
            return view('exchange');
        }
        return redirect('/signin');
    }

    public function verification($id)
    {
        $user = SignUP::where('id',$id)->first();
        if(!$user || $user->is_verified == 1){
            return redirect('/signin');
        }
        $email = $user->email;

        $this->sendOtp($user);//OTP SEND

        // return redirect("/verifyotp/".$user->id)->with('email', $email);
        // return redirect()->route('student.questionsevaluation', $evaluation)
        //         ->with('message', 'Question answered.')
        //         ->with('question', $questionWasCompleted);
        // return redirect("/verifyotp/".$user->email);
        return view('verifyotp',compact(['email', 'id']));
    }

    public function verifiedOtp(Request $request,$id)
    {
        $authUser = SignUP::where('email',$request->email)->first();
        
        $otpData = EmailVerification::where('otp',$request->otp)->first();
        if(!$otpData){
            return response()->json(['success' => false,'msg'=> 'You entered wrong OTP']);
        }
        else{

            $currentTime = (int) time();  // Explicitly cast to integer

$time = $otpData->created_at;

$time = strtotime($time);  // Convert to Unix timestamp
$time = (int) $time; 
            

            if($currentTime >= $time && $time >= $currentTime - (90+5)){//90 seconds
                
                // UPDATE SignUP set is_verified = 1 where id = $user->id;

              $auths=  SignUP::where('id', $id)
      
      ->update(['is_verified' => 1]);


                if ($auths) {
                    response()->json(['success' => true,'msg'=> 'Mail has been verified']);
                // return view('login');
                return redirect('/signin');
                }

                // SignUP::where('id',$user->id)->update([
                //     'is_verified' => 1
                // ]);
                

            }
            else{
                return response()->json(['success' => false,'msg'=> 'Your OTP has been Expired']);
            }

        }
    }

    public function resendOtp(Request $request,$email)
    {
        $user = SignUP::where('email',$email)->first();
        $otpData = EmailVerification::where('email',$email)->first();

        $currentTime = time();
        $time = $otpData->created_at;

        if($currentTime >= $time && $time >= $currentTime - (90+5)){//90 seconds
            return response()->json(['success' => false,'msg'=> 'Please try after some time']);
        }
        else{

            $this->sendOtp($user);//OTP SEND
            return response()->json(['success' => true,'msg'=> 'OTP has been sent']);
        }

    }

    public function userLogin(Request $request)
    {
        $request->validate([
            'email' => 'string|required|email',
            'password' => 'string|required'
        ]);

        $userCredential = $request->only('email','password');
        $requestPassword = $request->password;
        $email = $request->email;
        $pass = $request->password;
        $userData = SignUP::where('email',$request->email)->first();
        if($userData && $userData->is_verified == 0){
            $this->sendOtp($userData);
            return redirect("/verifyotp/".$userData->id);
        }
        else if( $userData && $userData->is_verifyed = 1 && $userData->password == $requestPassword && $userData->verified_or_not != "active"){
            $request->session()->put('loginId',$userData->id);
            $request->session()->put('UserName',$userData->fullname);

            return redirect('/status');

        }
        else if( $userData && $userData->is_verifyed = 1 && $userData->password == $requestPassword && $userData->verified_or_not == "active"){
            $request->session()->put('loginId',$userData->id);
            $request->session()->put('UserName',$userData->fullname);

            return redirect('/exchange');

        }
        else{
            return back()->with('error','Username & Password is incorrect');
        }
    }



    public function status(){
        return view('welcomeVerified');
    }


    public function Logout(Request $request){
        if (session()->has('loginId')) {
            // session()->pull('loginId');
            $request->session()->forget('loginId');
            return redirect('/signin');
        } else {
            # code...
        }
        
    }

    


}

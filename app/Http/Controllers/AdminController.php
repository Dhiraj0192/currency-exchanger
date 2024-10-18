<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminUser;

class AdminController extends Controller
{
    public function add_admin_user(){
        return view('admin.add-admin-user');
    }

    public function admin_login(){
        return view('admin.login');
    }

    public function addadminuser(Request $request)
    {
       $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'number' => 'required|numeric',
            'password' =>'required|string|min:8',
            'profilepic'=>'required|mimes:jpg,jpeg,png',
        ]);

        

        $profilepicture = time().".pp.".$request->file('profilepic')->getClientOriginalExtension();
        $request->file('profilepic')->move(public_path('/images/AdminProfilePicture'),$profilepicture);

        $user = new AdminUser();
        $user->fullname = $request->fullname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->number = $request->number;
        
        $user->profileImage = $profilepicture;
        $user->save();

        return redirect('/admin-login');
    }

    public function adminlogin(Request $request)
    {
        $request->validate([
            'email' => 'string|required|email',
            'password' => 'string|required'
        ]);

        $userCredential = $request->only('email','password');
        $email = $request->email;
        $pass = $request->password;
        $userData = AdminUser::where('email',$request->email)->first();
         if( $userData &&  $userData->password == $pass){
            $request->session()->put('AdminloginId',$userData->id);
            $request->session()->put('Adminimage',$userData->profileImage);
            $request->session()->put('Adminname',$userData->fullname);

            return redirect('/admin-dashboard');

        }
        else{
            return back()->with('error','Username & Password is incorrect');
        }
    }

    public function admin_dashboard(){
        return view('admin.dashboard');
    }

    public function Logout(Request $request){
        if (session()->has('AdminloginId')) {
            // session()->pull('loginId');
            $request->session()->forget('AdminloginId');
            return redirect('/admin-login');
        } else {
            # code...
        }
        
    }

    public function admin_user(){
        return view('admin.adminusers');
    }

    public function viewuser(){
        
        // $userData = SignUP::where('id',$id)->get();
    // $userData = AdminUser::where('email',$request->email)->first();

    // return view('admin.userview');
        return view('admin.adminusers');
    }
}

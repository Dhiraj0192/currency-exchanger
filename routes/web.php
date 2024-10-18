<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ExchangeController;
use App\Http\Controllers\SignUPController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\AdminController;
use App\Models\SignUP;
use App\Models\Exchange;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[IndexController::class,'index'])->middleware('alreadylogin');

Route::get('/about',[AboutController::class,'about'])->middleware('pendingstatus');

Route::get('/contact',[ContactUsController::class,'contact'])->middleware('pendingstatus');

Route::get('/exchange',[ExchangeController::class,'exchange'])->middleware('pendingstatus');

Route::get('/your-transactions',[ExchangeController::class,'yourexchange'])->middleware('pendingstatus');

Route::get('/signup',[SignUPController::class,'signup'])->middleware('alreadylogin');
Route::post('/signup',[SignUPController::class,'studentRegister'])->name('studentRegister');

Route::get('/signin',[SignInController::class,'signIn'])->middleware('alreadylogin');
Route::post('/signin',[SignUPController::class,'userLogin'])->name('userLogin');

// Route::get('/signin',function(){
//     return redirect('/');
// });
// Route::get('/',[SignUPController::class,'loadLogin']);

// Route::get('/verifyotp',[SignInController::class,'verifyotp']);
Route::get('/verifyotp/{id}',[SignUPController::class,'verification'])->name('verifyotp');

Route::post('/verified/{id}',[SignUPController::class,'verifiedOtp'])->name('verifiedOtp');

Route::get('/resend-otp/{email}',[SignUPController::class,'resendOtp'])->name('resendOtp');


Route::get('/status',[SignUPController::class,'status'])->middleware('loggedin');

Route::get('/logout',[SignUPController::class,'Logout'])->middleware('loggedin');

Route::post('/exchange',[ExchangeController::class,'exchangeProcess'])->name('exchangeProcess');


// admin routes

Route::get('/add-admin-user',[AdminController::class,'add_admin_user'])->middleware('adminloggedin');
Route::post('/addadminuser',[AdminController::class,'addadminuser'])->name('addadminuser');

Route::get('/admin-login',[AdminController::class,'admin_login'])->middleware('adminalreadylogin');
Route::post('/adminlogin',[AdminController::class,'adminlogin'])->name('adminlogin');

Route::get('/admin-dashboard',[AdminController::class,'admin_dashboard'])->middleware('adminloggedin');

Route::get('/adminlogout',[AdminController::class,'Logout'])->middleware('adminloggedin');

// Route::get('/admin-user',[AdminController::class,'admin_user']);

Route::get('/admin-user', function () {

    $adminuser = DB::table('admin_users')->get();
    // $userData = AdminUser::where('email',$request->email)->first();

    return view('admin.adminusers', ['adminuser' => $adminuser]);
})->middleware('adminloggedin');


Route::get('/active-user', function () {

    
    $userData = SignUP::where('verified_or_not','active')->get();
    // $userData = AdminUser::where('email',$request->email)->first();

    return view('admin.activeprofile', ['userData' => $userData]);
})->middleware('adminloggedin');

Route::get('/pending-user', function () {

    
    $userData = SignUP::where('verified_or_not',NULL)->get();
    // $userData = AdminUser::where('email',$request->email)->first();

    return view('admin.pendingprofile', ['userData' => $userData]);
})->middleware('adminloggedin');


Route::get('/user/{id}', function ($id) {

    
    $userData = SignUP::where('id',$id)->first();
    // $userData = AdminUser::where('email',$request->email)->first();

    return view('admin.userview',compact('userData'));
})->middleware('adminloggedin')->name('admin.user');

Route::get('/transaction/{id}', function ($id) {

    
    $userData = Exchange::where('id',$id)->first();
    // $userData = AdminUser::where('email',$request->email)->first();

    return view('admin.transactionview',compact('userData'));
})->middleware('adminloggedin')->name('admin.transaction');

Route::get('/rejectuser/{id}', function ($id) {

    $auths=  SignUP::where('id', $id)
      
      ->update(['verified_or_not' => NULL]);


      $userData = SignUP::where('id',$id)->first();
      // $userData = AdminUser::where('email',$request->email)->first();
  
      return view('admin.userview',compact('userData'));
})->middleware('adminloggedin');

Route::get('/rejecttransaction/{id}', function ($id) {

    $auths=  Exchange::where('id', $id)
      
      ->update(['Status' => 'Pending']);


      $userData = Exchange::where('id',$id)->first();
      // $userData = AdminUser::where('email',$request->email)->first();
  
      return view('admin.transactionview',compact('userData'));
})->middleware('adminloggedin');

Route::get('/acceptuser/{id}', function ($id) {

    $auths=  SignUP::where('id', $id)
      
      ->update(['verified_or_not' => 'active']);


      $userData = SignUP::where('id',$id)->first();
      // $userData = AdminUser::where('email',$request->email)->first();
  
      return view('admin.userview',compact('userData'));
})->middleware('adminloggedin');

Route::get('/accepttransaction/{id}', function ($id) {

    $auths=  Exchange::where('id', $id)
      
      ->update(['Status' => 'Completed']);


      $userData = Exchange::where('id',$id)->first();
      // $userData = AdminUser::where('email',$request->email)->first();
  
      return view('admin.transactionview',compact('userData'));
})->middleware('adminloggedin');

Route::get('/completed-transactions', function () {

    
    $userData = Exchange::where('Status','completed')->get();
    // $userData = AdminUser::where('email',$request->email)->first();

    return view('admin.completetransaction', ['userData' => $userData]);
})->middleware('adminloggedin');

Route::get('/pending-transactions', function () {

    
    $userData = Exchange::where('Status','Pending')->get();
    // $userData = AdminUser::where('email',$request->email)->first();

    return view('admin.pendingtransactions', ['userData' => $userData]);
})->middleware('adminloggedin');




<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignInController extends Controller
{
    public function SignIn(){
        return view('login');
    }

    public function verifyotp(){
        return view('verifyotp');
    }
}

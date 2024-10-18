<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Exchange;
use Illuminate\Support\Facades\Session;

class ExchangeController extends Controller
{
    public function exchange(){
        return view('exchange');
    }

    public function yourexchange(){

        $userID = Session::get('loginId');
        $userExchange = Exchange::where('userID',$userID)->get();
        return view('yourtransactions', ['userExchange' => $userExchange]);
    }

    public function exchangeProcess(Request $request)
    {
       $request->validate([
            'amount' => 'required|numeric',
            'address' => 'required|string|max:255',
            'paymentimages'=>'required|mimes:pdf'
        ]);

        $userID = Session::get('loginId');

        $paymentfilename = time().".pp.".$request->file('paymentimages')->getClientOriginalExtension();
        $request->file('paymentimages')->move(public_path('/images/PaymentProofFile'),$paymentfilename);

        $user = new Exchange();
        $user->userID = $userID;
        $user->Amount = $request->amount;
        $user->Address = $request->address;
        $user->ReceiveAmount = $request->receive;
        $user->PaymentProof = $paymentfilename;
        $user->Status = 'Pending';
        $user->save();

        return redirect('/your-transactions');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\payments;
use DB;

class paymentsForm extends Controller
{
    public function pushForm(){
        $money =  new payments();
        $money->firstName = request('firstname');
        $money->lastName = request('lastname');
        $money->email = request('email');
        $money->phoneNumber = request('phonenumber');
        $money->save();
    return redirect()->route('malipo')->withSuccess(['Booking Successful!!👍🏿']);

    }
    //pull bookings from DB
    public function pullPayments()
    {
        $payments= DB::select('select * from payments');
        return view('viewpayments', ['payments'=>$payments]);
    }

    //Delete function
    public function deletePayments($paymentId)
    {
        DB::delete('delete from payments where paymentId =?',[$paymentId]);
        return redirect()->route('vuta')->withSuccess(['Payment has been Deleted Successfully👍🏿']);
    }

}

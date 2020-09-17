<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\payments;

class paymentsForm extends Controller
{
    public function pushForm(){
        $money =  new payments();
        $money->firstName = request('firstname');
        $money->lastName = request('lastname');
        $money->email = request('email');
        $money->phoneNumber = request('phonenumber');
        // $money->paymentType = request('paymentType');
        $money->save();
    return redirect()->route('malipo')->withSuccess(['Booking Successful!!']);

    }
}

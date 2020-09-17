<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\enquiries;

class enquiryCont extends Controller
{
    public function pushEnquiries(){
        $ques =  new enquiries();
        $ques->firstName = request('firstname');
        $ques->lastName = request('lastname');
        $ques->phoneNumber = request('phonenumber');
        $ques->enquiry = request('enquiry');
        $ques->save();
    return redirect()->route('question')->withSuccess(['Sent Successfully!!']);

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\enquiries;
use DB;

class enquiryCont extends Controller
{
    public function pushEnquiries(){
        $ques =  new enquiries();
        $ques->firstName = request('firstname');
        $ques->lastName = request('lastname');
        $ques->email = request('email');
        $ques->phoneNumber = request('phonenumber');
        $ques->enquiry = request('enquiry');
        $ques->save();
    return redirect()->route('question')->withSuccess(['Sent Successfully!!👍🏿']);

    }
    //pull enquiries from DB
    public function pullEnquiries()
    {
        $enquiries= DB::select('select * from enquiries');
        return view('viewenquiries', ['enquiries'=>$enquiries]);
    }

    //delete enquiries function
    public function deleteEnquiries($enquiryId)
    {
        DB::delete('delete from enquiries where enquiryId =?',[$enquiryId]);
        return redirect()->route('noma')->withSuccess(['Enquiry has been Deleted Successfully👍🏿']);
    }

}

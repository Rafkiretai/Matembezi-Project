<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\car_hire;
use DB;

class addcarCont extends Controller
{
    public function pushCars()
    {
        $veh = new car_hire();
        $veh->registrationNo = request('registration');
        $veh->capacity = request('capacity');
        $veh->description = request('description');
        $veh->bookingCharge = request('price');
        $veh->photo = request('photo');
        $veh->save();
    return redirect()->route('gari')->withSuccess(['Car Added Successfully!!👍🏿']);
    }

}

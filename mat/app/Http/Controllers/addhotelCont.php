<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hotels;
use DB;

class addhotelCont extends Controller
{
    public function pushhotel(){
        $hot =  new hotels();
        $hot->name = request('name');
        $hot->caption = request('caption');
        $hot->description = request('description');
        $hot->pricePerNight = request('price');
        $hot->photo = request('photo');

        $hot->save();
    return redirect()->route('hoteli')->withSuccess(['Hotel Added Successfully!!👍🏿']);
    }
}

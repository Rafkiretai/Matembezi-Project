<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\destinations;
use DB;

class addsafarisCont extends Controller
{
    public function pushSafaris()
    {
        $travel =  new destinations();
        $travel->title = request('title');
        $travel->description = request('description');
        $travel->duration = request('duration');
        $travel->price = request('price');
        $travel->photo = request('photo');
        
        $travel->save();
    return redirect()->route('safaris')->withSuccess(['Safari Added Successfully!!👍🏿']);
    }

    //pull safaris from DB
    public function pullSafaris()
    {
        $destinations= DB::select('select * from destinations');
        return view('safaris', ['destinations'=>$destinations]);

       
    }
}

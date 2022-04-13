<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rates;
use App\Models\User;
use Illuminate\Support\Carbon;
use Auth;
class RatesController extends Controller
{
    
    public function ViewRates(User $user){
        #$rates1 = Rates::find($user->id); //::find($id);
        $rates = Rates::where('to_id', $user->id)
                        ->get();
        $nowuser = Auth::user()->id;
        
        return view("admin.ratinguser.rates",[
            'rates' => $rates,
            'user' => $user,
            'nowuser' => $nowuser
        ]);

    }

    public function StoreRate( Request $request, User $user){ //Request $request,
        
         Rates::insert([
             'who_id' =>Auth::user()->id,
             'to_id'=> $user->id,

            'comunication'=> $request->comunication,
            'reliability'=> $request->reliability,
            'packet_condition'=> $request->packet_condition,
            'created_at' => Carbon::now(),
            'fedback'=> $request->overall,
            'coment'=> $request->coment,
         ]);

        return $this->ViewRates($user);

    }




}

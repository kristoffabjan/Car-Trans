<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OfferController extends Controller
{
    //
    public function create(Request $request, $brand_id)
    {
        $validated = $request->validate([
            'bid' => 'required',
        ]);

        $user_id = Auth::user()->id;
        Offer::insert([
            'user_id' => $user_id,
            'brand_id'=> $brand_id,
            'bid' => $request->bid,
            'message' => $request->message
        ]);

        return redirect()->route('brand', $brand_id);
    }

    public function delete(Offer $offer){
        $brand_id = Brand::find($offer->ride_id);

        $deleted = Offer::where('id', $offer->id)->delete();
        return redirect()->route('brand', $offer->brand->id);
    }
}

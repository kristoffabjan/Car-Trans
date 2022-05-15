<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\User;
use App\Models\Multipic;
use App\Models\Offer;
use Illuminate\Support\Carbon;
use Image;
use Auth;

class BrandController extends Controller
{
  public function __construct(){
        $this->middleware('auth');
    }

    public function AllBrand(){
        $brands = Brand::paginate(20); 
        $date = new Carbon;
        return view("admin.brand.index", [
            'brands' => $brands,
            'date' => $date,
        ]);
    }

    public function UserBrand(){
        //$user_id = auth()->user('id');
        //$user = User::find($user_id);
        //$brands = Brand::where('user_id','=', Auth::id())->get();
        $brands = Brand::latest()->paginate(20); //::find($user_id);//::latest()->paginate(1); 
        return view("admin.brand.userbrands", compact('brands'));//->with('brandss', $user->brandss);;
    }

    public function Won(){
        $brands = Brand::all();
        $date = new Carbon;
        $user = Auth::user()->id; 

        return view("admin.brand.won", [
            'brands' => $brands,
            'date' => $date,
            'user' => $user,
        ]);
    }

    #open page of ride enquiry POVPRASEVANJE
    public function Addb(){
        //$brands = Brand::get();
        return view('admin.brand.addb');//, compact('brands'));
    }

    #open page of ride offers PONUDBA ZA VOZNO
    public function add_offer(){
        //$brands = Brand::get();
        return view('admin.brand.add_offer');//, compact('brands'));
    }

    public function StoreBrand(Request $request){
        $validatedData = $request->validate([
            'brand_name' => 'required',
        ],
        [
            'brand_name.required' => 'Please Input Brand Of Car',
        ]);

        $brand_image = $request->file('brand_image');

        // $name_gen = hexdec(uniqid());
        // $img_ext = strtolower($brand_image->getClientOriginalExtension());
        // $img_name = $name_gen.'.'.$img_ext;
        // $up_location = 'image/brand/';
        // $last_img = $up_location.$img_name;
        // $brand_image->move($up_location,$img_name);

        // $name_gen = hexdec(uniqid()).'.'.$brand_image->getClientOriginalExtension();
        // Image::make($brand_image)->resize(1280,720)->save('image/brand/'.$name_gen);

        // $last_img = 'image/brand/'.$name_gen;

        Brand::insert([
            'brand_name'=> $request->brand_name,
            'user_id' => Auth::user()->id,
            'height'=> $request->height,
            'width'=> $request->width,
            'weight'=> $request->weight,
            'length'=> $request->length,
            'price'=> $request->price,
            'end_time'=> $request->end_time,
            'end_date'=> $request->end_date,
            // 'brand_image' => $last_img,
            'opis'=> $request->opis,
            'created_at' => Carbon::now(),

            'from_name'=> $request->from_name,
            'from_surname'=> $request->from_surname,
            'to_name'=> $request->to_name,
            'to_surname'=> $request->to_surname,
            'from_phone'=> $request->from_phone,
            'to_phone'=> $request->to_phone,
            'from_street' => $request->from_street,
            'from_city'=> $request->from_city,
            'from_state'=> $request->from_state,
            'to_street' => $request->to_street,
            'to_city'=> $request->to_city,
            'to_state'=> $request->to_state,
            'from_post_nr'=> $request->from_post_nr,
            'from_post'=> $request->from_post,
            'to_post_nr'=> $request->to_post_nr,
            'to_post'=> $request->to_post,

            'date_of_go'=> $request->date_of_go,
            'time_of_go'=> $request->time_of_go,
            'ride_type' => $request->ride_type,

            'bidder_id'=> '0',
        ]);

        return Redirect()->route('dashboard');

    }

    public function Edit($id){
        $brands = Brand::find($id);
        return view('admin.brand.edit', compact('brands'));
    }

    
    public function Update(Request $request, $id){
        $validatedData = $request->validate([
            'brand_name' => 'required|min:4',
        ],
        [
            'brand_name.required' => 'Please Input Brand Name',
            'brand_name.min' => 'Brand longer then 4 chars',
        ]);

        $old_image=$request->old_image;

        $brand_image = $request->file('brand_image');

        if($brand_image){
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($brand_image->getClientOriginalExtension());
            $img_name = $name_gen.'.'.$img_ext;
            $up_location = 'image/brand/';
            $last_img = $up_location.$img_name;
            $brand_image->move($up_location,$img_name);
    
            unlink($old_image);
            Brand::find($id)->update([
            'brand_name'=> $request->brand_name,
            'user_id' => Auth::user()->id,
            'height'=> $request->height,
            'width'=> $request->width,
            'weight'=> $request->weight,
            'length'=> $request->length,
            'price'=> $request->price,
            'end_time'=> $request->end_time,
            'end_date'=> $request->end_date,
            'brand_image' => $last_img,
            'opis'=> $request->opis,
            'created_at' => Carbon::now(),

            'from_name'=> $request->from_name,
            'from_surname'=> $request->from_surname,
            'to_name'=> $request->to_name,
            'to_surname'=> $request->to_surname,
            'from_phone'=> $request->from_phone,
            'to_phone'=> $request->to_phone,
            'from_street' => $request->from_street,
            'from_city'=> $request->from_city,
            'from_state'=> $request->from_state,
            'to_street' => $request->to_street,
            'to_city'=> $request->to_city,
            'to_state'=> $request->to_state,
            'from_post_nr'=> $request->from_post_nr,
            'from_post'=> $request->from_post,
            'to_post_nr'=> $request->to_post_nr,
            'to_post'=> $request->to_post,

            'date_of_go'=> $request->date_of_go,
            'time_of_go'=> $request->time_of_go,

            'bidder_id'=> '0',
            ]);
    
            return Redirect()->back()->with('success', 'Brand Updated Successfully');
        }else{
            Brand::find($id)->update([
                'brand_name'=> $request->brand_name,
                'created_at' => Carbon::now(),
            ]);
    
            return Redirect()->back()->with('success', 'Brand Updated Successfully');
        }



    }

    public function Delete($id){
        $image = Brand::find($id);
        $old_image = $image->brand_image;
        unlink($old_image);

        Brand::find($id)->delete();
        return Redirect()->back()->with('success','Category Permanently Deleted');
    }

    // Multi image function
    
    public function Multipic(Brand $brands){
        $images = Multipic::where('image_ID', $brands->id)
        ->get();
        return view ('admin.multipic.index',[
            'brands' => $brands,
            'images' => $images
        ]);
    }

    public function StoreImg(Request $request, Brand $brands){

        $image = $request->file('image');

        foreach($image as $multi_img){

            $name_gen = hexdec(uniqid()).'.'.$multi_img->getClientOriginalExtension();
            Image::make($multi_img)->resize(1280,720)->save('image/multi/'.$name_gen);

            $last_img = 'image/multi/'.$name_gen;
           


            Multipic::insert([
                'image' => $last_img,
                'image_ID'=> $brands->id,
                'created_at' => Carbon::now(),
            ]);
        }

        return Redirect()->back()->with('success', 'Brand Inserted Successfully');

    }

    public function Check($id){
        $brands = Brand::find($id);
        $images = Multipic::where('image_ID', $brands->id)
        ->get();
        //  $rates = Rates::where('to_id', $brands->user_id)
        //  ->get();
        $bid_placed = Brand::where('bidder_id', 0)
        ->get();

        #check time
        $date = $brands->date_of_go;
        $time = $brands->time_of_go;
        $datetime = $date." ".$time;
        $ride_time = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$datetime);

        $offers = Offer::where('brand_id', $id)->get();

        return view('admin.brand.check', [
            'brands' => $brands,
            'bid_placed' => $bid_placed,
            'images' => $images,
            'ride_time' => $ride_time,
            'offers' => $offers
            // 'rates' => $rates
        ]);
    }

    public function BidUpdate(Request $request, $id){

        $bidder_id = Auth::id(); 
        $old_price= Brand::find($id)->value('price');
        $new_pirce = $request->price;

        if ($old_price > $new_pirce){
            Brand::find($id)->update([
                'price'=>$request->price,
                'bidder_id' => $bidder_id,
                'created_at' => Carbon::now(),
            ]);
        }
            return Redirect()->back()->with('success', 'Brand Updated Successfully');
    }

    public function GetInfo($id){
        $brands = Brand::find($id);
        $images = Multipic::where('image_ID', $brands->id)
        ->get();
        return view('admin.brand.allinfo', [
            'brands' => $brands,
            'images' => $images,
        ]);
    }

    

    
    public function Sort($sort){
        $brands = Brand::get();
        $date = new Carbon;
        switch ($sort){
            case ('created_atasc'): 
                $sortByDateAsc=$brands->sortByDesc('created_at');
                return view("admin.brand.index", [
                    'brands' => $sortByDateAsc,
                    'date' => $date,
                ]);
                break;

            case ('all_rides'): 
                return view("admin.brand.index", [
                    'brands' => $brands,
                    'date' => $date,
                ]);
                break;

            case ('created_atdesc'): 
                $sortByDateDesc=$brands->sortBy('created_at');
                return view("admin.brand.index", [
                    'brands' => $sortByDateDesc,
                    'date' => $date,
                ]);
                break;

            case ('offer'): 
                $offers=$brands->where('ride_type', 1);
                return view("admin.brand.index", [
                    'brands' => $offers,
                    'date' => $date,
                ]);
                break;

            case ('enquiry'): 
                $enquiry=$brands->where('ride_type', 0);
                return view("admin.brand.index", [
                    'brands' => $enquiry,
                    'date' => $date,
                ]);
                break;

            case ('date_of_goAsc'): 
                $sortByDateGoAsc=$brands->sortBy('date_of_go');
                return view("admin.brand.index", [
                    'brands' => $sortByDateGoAsc,
                    'date' => $date,
                ]);
                break;

            case ('date_of_goDesc'): 
                $sortByDateDesc=$brands->sortByDesc('date_of_go');
                return view("admin.brand.index", [
                    'brands' => $sortByDateDesc,
                    'date' => $date,
                ]);
                break;

            case ('from_state'): 
                $sortfstate=$brands->sortBy('from_state');
                return view("admin.brand.index", [
                    'brands' => $sortfstate,
                    'date' => $date,
                ]);
                break;

            case ('to_state'): 
                $sorttstate=$brands->sortBy('to_state');
                return view("admin.brand.index", [
                    'brands' => $sorttstate,
                    'date' => $date,
                ]);
                break;
            case ('from_city'): 
                $sortfcity=$brands->sortBy('from_city');
                return view("admin.brand.index", [
                    'brands' => $sortfcity,
                    'date' => $date,
                ]);
                break;

            case ('to_city'): 
                $sorttcity=$brands->sortBy('to_city');
                return view("admin.brand.index", [
                    'brands' => $sorttcity,
                    'date' => $date,
                ]);
                break;

            case ('pricel'): 
                $price=$brands->sortBy('price');
                return view("admin.brand.index", [
                    'brands' => $price,
                    'date' => $date,
                ]);
                break;

            case ('priceh'): 
                $price=$brands->sortByDesc('price');
                return view("admin.brand.index", [
                    'brands' => $price,
                    'date' => $date,
                ]);
                break;
        }
    }


    public function Search(Request $request){
        
        $from_state = DB::table('brands')->select('from_state')->disticnt()->get()->pluck('from_state')->sort();
        $to_state =  DB::table('brands')->select('to_state')->disticnt()->get()->pluck('to_state')->sort();
        $height =  DB::table('brands')->select('height')->disticnt()->get()->pluck('height')->sort();
        $width =  DB::table('brands')->select('width')->disticnt()->get()->pluck('width')->sort();
        $length =  DB::table('brands')->select('length')->disticnt()->get()->pluck('length')->sort();
        $weight =  DB::table('brands')->select('weight')->disticnt()->get()->pluck('weight')->sort();
        
    
        $post=POSST::query();

        if($request -> filled('from_state')){
            $post->where('from_state',$request->from_state);
        }
        if($request -> filled('to_state')){
            $post->where('to_state',$request->to_state);
        }
        if($request -> filled('height')){
            $post->where('height',$request->height);
        }
        if($request -> filled('width')){
            $post->where('width',$request->width);
        }
        if($request -> filled('length')){
            $post->where('length',$request->length);
        }
        if($request -> filled('weight')){
            $post->where('weight',$request->weight);
        }

        return view("admin.brand.index",[
            'from_state' => $from_state,
            'to_state' =>  $to_state,
            'height' => $height,
            'width' => $width,
            'length' => $length, 
            'weight' => $weight,
            'posts' => $post->get(),
        ]);

    }

    public function store(Request $request){
        return $request->all();
        return view("admin.brand.index");
    }

}

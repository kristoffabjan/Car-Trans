<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Offer;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'brand_name',
        'height',
        'width',
        'weight',
        'length',
        'price',
        'end_time',
        'end_date',
        'brand_image',
        'opis',
      
        'from_name',
        'from_surname',
        'to_name',
        'to_surname',
        'from_phone',
        'to_phone',
        'from_street',
        'from_city',
        'from_state',
        'to_street',
        'to_city',
        'to_state',
        'from_post_nr',
        'from_post',
        'to_post_nr',
        'to_post',

        'date_of_go',
        'time_of_go',
        'ride_type',

        'bidder_id',
    ];

    //join userja in category preko id
    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function bidder(){
        return $this->hasOne(User::class, 'id', 'bidder_id');
    }

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }

    // public function user(){
    //     return $this->belongsTo('User');
    // }
}

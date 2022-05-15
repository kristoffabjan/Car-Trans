<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use App\Models\Brand;

class Offer extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'brand_id',
        'bid',
        'message'
    ];
    
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

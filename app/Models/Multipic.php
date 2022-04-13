<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Multipic extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'image_ID',
    ];
    
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}

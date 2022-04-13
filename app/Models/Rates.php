<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rates extends Model
{
    use HasFactory;

    protected $fillable = [
        'who_id',
        'to_id',
        'average_all',
        'comunication',
        'reliability',
        'packet_condition',
        'coment',
    ];


        //join userja in category preko id
        public function rater(){
            return $this->hasOne(User::class, 'id', 'who_id');
        }
}

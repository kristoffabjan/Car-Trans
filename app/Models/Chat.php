<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id_from',
        'user_id_to',
        'message'
    ];


    //join userja in category preko id
    public function from(){
        return $this->belongsTo(User::class, 'id', 'user_id_from');
    }

    public function to(){
        return $this->belongsTo(User::class, 'id', 'user_id_to');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    
    public function __construct()
    {
    $this->middleware('auth');
    }
   
    
   public function my_chats(User $user)
   {
        return view("admin.chat");
    }
}

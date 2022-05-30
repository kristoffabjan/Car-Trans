<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    
    public function __construct()
    {
    $this->middleware('auth');
    }
   
    
    #optional second user as parameter
   public function my_chats(User $user, User $user2 = null)
   {

        $users = null;
        $chats = null;
        // if ... then show chat with that person on main window

        // users we chat with
        $users_id_1 = Chat::where(['user_id_from' => $user->id])
        ->orWhere(['user_id_to' => $user->id])
        ->pluck('user_id_from')
        ->unique()
        ->toArray();

        $users_id_2 = Chat::where(['user_id_from' => $user->id])
                ->orWhere(['user_id_to' => $user->id])
                ->pluck('user_id_to')
                ->unique()
                ->toArray();

        // all users we chatted with
        $users = User::whereIn('id', array_merge($users_id_1, $users_id_2))
                ->get();

        if (!empty($user2)) {
            // chats with $user2, ordered by time and users
            $chats = Chat::where([
                        ['user_id_from', '=',  $user->id],
                        ['user_id_to', '=', $user2->id]
                        ])
                        ->orWhere([
                            ['user_id_from','=', $user2->id], 
                            ['user_id_to' ,'=', $user->id]
                        ])
                        ->orderBy('created_at', 'asc')
                        ->orderBy('user_id_from', 'asc')
                        ->get();
        }


        return view("admin.chat", [
            'users' => $users,
            'chats' => $chats,
            'receiver' => $user2
        ]);
    }

    public function send_message(Request $request, User $user1, User $user2)
    {
        $validatedData = $request->validate([
            'message' => 'required',
        ]);

        Chat::insert([
            'user_id_from' => $user1->id,
            'user_id_to' => $user2->id,
            'message' => $request->message,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        return redirect()->route('all.chats', [$user1, $user2]);
    }
}

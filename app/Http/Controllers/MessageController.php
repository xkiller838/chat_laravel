<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Events\MessageSent;

class MessageController extends Controller
{
    public function __construct() {
	    $this->middleware('auth');
     }

     public function sent(Request $request){		

        $message = auth()->user()->messages()->create([
            'content' => $request->message,
            'chat_id' => $request->chat_id
        ])->load('user');

        broadcast(new MessageSent($message))->toOthers();
        
        return $message;
     }


}

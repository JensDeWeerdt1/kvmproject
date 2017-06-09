<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function Chat(Request $request){
        $chat = $request->chat;
        $user = \Auth::user()->name;
        $chatHead = $request->chatHead;


        $data = Input::all();
        console.log($data + "chat: " + $chat + "user: " + $user + "chatHead: " + $chatHead);

        /*$query = DB::table('messages')->insert(
            ['chat' => $chat, 'name' => $name, 'chatHead' => $chatHead]
        );*/
    }
}

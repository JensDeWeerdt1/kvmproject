<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    public function Chat(Request $request, $id){
        $chat = $request->chat;
        $user = \Auth::user()->name;
        $chatHead = $request->chatHead;


        var_dump($chat);

        $query = DB::table('chats')->insert(
            ['chat' => $chat, 'name' => $user, 'chatHead' => $chatHead]
        );

    }
}

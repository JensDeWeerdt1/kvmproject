<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chat;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ChatController extends Controller
{
    public function Chat(Request $request, $id){
        $chat = $request->chat;
        $userid = \Auth::user()->id;

        var_dump($id);

        $query = DB::table('chats')->insert(
            ['chat' => $chat, 'video_id' => $id, 'user_id' => $userid]
        );
        return Redirect::to('herbekijk/' . $id);
    }
}

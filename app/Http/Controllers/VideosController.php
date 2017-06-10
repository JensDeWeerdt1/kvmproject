<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showVideo($videoId){
        $videoSrc = DB::table('videos')
            ->where('video_id', $videoId)
            ->select('videoSrc')
            ->first();

        $query = DB::table('chats')
            ->leftJoin('users', 'chats.user_id', '=', 'users.id')
            ->where('video_id', $videoId)->distinct()->get();

        return view('play')
            ->with('videoSrc', $videoSrc->videoSrc)
            ->with('videoid', $videoId)
            ->with('chats', $query);
    }
}

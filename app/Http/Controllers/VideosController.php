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
        $teller = 1;
        $this->video2($teller);
        $this->video3($teller);
        $this->video2($videoId);
        $this->video3($videoId);

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
            ->with('chats', $query)
            ->with('teller', $teller);
    }

    public function video2($videoId) {
        $teller = 2;
        $videoSrc2 = DB::table('videos')
            ->where('video_id', $videoId)
            ->select('videoSrc2')
            ->first();

        $query = DB::table('chats')
            ->leftJoin('users', 'chats.user_id', '=', 'users.id')
            ->where('video_id', $videoId)->distinct()->get();

        return view('play')
            ->with('videoSrc2', $videoSrc2->videoSrc2)
            ->with('videoid', $videoId)
            ->with('chats', $query)
            ->with('teller', $teller);
    }

    public function video3($videoId) {
        $teller = 3;
        $videoSrc3 = DB::table('videos')
            ->where('video_id', $videoId)
            ->select('videoSrc3')
            ->first();

        $query = DB::table('chats')
            ->leftJoin('users', 'chats.user_id', '=', 'users.id')
            ->where('video_id', $videoId)->distinct()->get();

        return view('play')
            ->with('videoSrc3', $videoSrc3->videoSrc3)
            ->with('videoid', $videoId)
            ->with('chats', $query)
            ->with('teller', $teller);
    }
}

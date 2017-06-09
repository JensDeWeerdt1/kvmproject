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

        return view('play')
            ->with('videoSrc', $videoSrc->videoSrc);
    }
}

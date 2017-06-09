<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // account type achterhalen + optie's
        $loggedInUser = \Auth::user()->id;

        $videos = Video::all();
              //var_dump($videos);
              return view('home')
                    ->with('videos', $videos);
    }
}

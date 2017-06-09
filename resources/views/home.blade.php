@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <ul class="col-md-8 col-md-offset-2">
                <div class="dropdown dropdown1">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Gespeelde matchen
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">Gespeelde matchen</a></li>
                        <li><a href="#">Live</a></li>
                    </ul>
                </div>
                <div class="kalender">
                    <img  src="../../images/calendar.svg" alt="Kalender icoon">
                </div>
                <hr>
                <ul>
                    @foreach($videos as $video)

                        <a href="/herbekijk/{{$video->video_id}}" class="flex-item">
                            <li class="flex-item">
                                <img class="overview" src="../../images/overview2.jpg" alt="sfeer image">
                            </li>
                            <div class="flexcontainer1">
                                <h3 class="flex-item1">{{$video->thuisPloeg}}</h3>
                                <h3 class="flex-item1">{{$video->stand}}</h3>
                                <h3 class="flex-item1">{{$video->uitPloeg}}</h3>
                            </div>
                        </a>
                    @endforeach
                </ul>
            </ul>
        </div>
    </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                @if ($teller == 1)
                    <iframe class="videoplayer" width="560" height="315" src="{{ $videoSrc }}" frameborder="0" allowfullscreen></iframe>
                @elseif ($teller == 2)
                    <iframe class="videoplayer" width="560" height="315" src="{{ $videoSrc2 }}" frameborder="0" allowfullscreen></iframe>
                @elseif ($teller == 3)
                    <iframe class="videoplayer" width="560" height="315" src="{{ $videoSrc3 }}" frameborder="0" allowfullscreen></iframe>
                @endif


                <h2 class="videotitles">{{$thuisPloeg}} {{$stand}} {{$uitPloeg}} </h2>
                <div class="dropdown dropdown2">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Views
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <li><a href="/herbekijk/{{$videoid}}/standpunt1">Camera 1</a></li>
                        <li><a href="/herbekijk/{{$videoid}}/standpunt2">Camera 2</a></li>
                        <li><a href="/herbekijk/{{$videoid}}/standpunt3">Camera 3</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="commentSection">
            <h4 class="reactiesTitle">Reacties</h4>
        @foreach($chats as $chat)
            <div class="commentBox">
            <img class="commentImg" src="/{{$chat->profilePic}}" alt="user profile image">
            <p class="commentName">{{$chat->name}}</p>
            <p class="commentText">{{$chat->chat}}</p>
                <span class="clearfix"></span>
            </div>
        @endforeach

        <form class="" action="/herbekijk/{{$videoid}}/chat" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <textarea type="text" rows="4" name="chat" id="chat" class="form-control" placeholder="Typ hier uw reactie" value="" required></textarea><br/>
            <input type="submit" name="submit" class="submit btn btn-primary" id="chat_submit" value="Reageer">
        </form>
    </div>
    </div>
@endsection
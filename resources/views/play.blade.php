@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <iframe class="videoplayer" width="560" height="315" src="{{ $videoSrc }}" frameborder="0" allowfullscreen></iframe>

                <h2 class="videotitles">Football 360</h2>
                <div class="dropdown dropdown2">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Views
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <li><a href="#">Camera 1</a></li>
                        <li><a href="#">Camera 2</a></li>
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
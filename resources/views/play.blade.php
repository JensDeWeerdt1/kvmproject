@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <iframe class="videoplayer" width="560" height="315" src="{{ $videoSrc }}" frameborder="0" allowfullscreen></iframe>
                
                <h2 class="videotitles">Football 360</h2>
            </div>
        </div>

        @foreach($chats as $chat)
            <p>{{$chat->name}}</p>
            <p>{{$chat->chat}}</p>
        @endforeach

        <form class="" action="/herbekijk/{{$videoid}}/chat" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="text" name="chat" id="chat" class="form-control" placeholder="chat text" value="" required><br/>
            <input type="submit" name="submit" class="submit btn btn-primary" id="chat_submit" value="Submit">
        </form>
    </div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container videoplayer">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <iframe width="560" height="315" src="{{ $videoSrc }}" frameborder="0" allowfullscreen></iframe>
                <h2 class="videotitles">Football 360</h2>
            </div>
        </div>
        <form class="" action="{{ URL('/herbekijk/chat') }}" method="post">
            <input type="text" name="chat" id="chat" class="form-control" placeholder="chat text" value="" required><br/>
            <input type="submit" name="submit" class="submit btn btn-primary" id="chat_submit" value="Submit">
        </form>
    </div>
@endsection
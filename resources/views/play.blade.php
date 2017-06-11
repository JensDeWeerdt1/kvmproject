@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                @if ($teller == 1)
                    <iframe id="ado-{{  $videoSrc }}" src="//upload.omnivirt.com/content/{{ $videoSrc }}?tracking=0&amp;clickTrackingPixelUrl=" frameborder="0" width="720" height="250" webkitAllowFullScreen="1" mozallowfullscreen="1" allowFullScreen="1"></iframe><script type="text/javascript">document.getElementById("ado-{{  $videoSrc }}").setAttribute("src", "//www.vroptimal-3dx-assets.com/content/{{  $videoSrc }}?player=true&autoplay=true&referer=" + encodeURIComponent(window.location.href));</script><noscript>. </noscript><script type="text/javascript" src="//remote.vroptimal-3dx-assets.com/scripts/vroptimal.js"></script>
                @elseif ($teller == 2)
                    <iframe id="ado-{{  $videoSrc2 }}" src="//upload.omnivirt.com/content/{{ $videoSrc2 }}?tracking=0&amp;clickTrackingPixelUrl=" frameborder="0" width="720" height="250" webkitAllowFullScreen="1" mozallowfullscreen="1" allowFullScreen="1"></iframe><script type="text/javascript">document.getElementById("ado-{{  $videoSrc2 }}").setAttribute("src", "//www.vroptimal-3dx-assets.com/content/{{  $videoSrc2 }}?player=true&autoplay=true&referer=" + encodeURIComponent(window.location.href));</script><noscript>. </noscript><script type="text/javascript" src="//remote.vroptimal-3dx-assets.com/scripts/vroptimal.js"></script>
                @elseif ($teller == 3)
                    <iframe id="ado-{{  $videoSrc3 }}" src="//upload.omnivirt.com/content/{{ $videoSrc3 }}?tracking=0&amp;clickTrackingPixelUrl=" frameborder="0" width="720" height="250" webkitAllowFullScreen="1" mozallowfullscreen="1" allowFullScreen="1"></iframe><script type="text/javascript">document.getElementById("ado-{{  $videoSrc3 }}").setAttribute("src", "//www.vroptimal-3dx-assets.com/content/{{  $videoSrc3 }}?player=true&autoplay=true&referer=" + encodeURIComponent(window.location.href));</script><noscript>. </noscript><script type="text/javascript" src="//remote.vroptimal-3dx-assets.com/scripts/vroptimal.js"></script>
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
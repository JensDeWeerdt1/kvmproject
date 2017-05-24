@extends('layouts.app')
<?php
header('X-Frame-Options: GOFORIT');
?>
@section('content')
    <div class="container videoplayer">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <iframe width="560" height="315" src="{!! $videoSrc !!}" frameborder="0" allowfullscreen></iframe>
                <h2 class="videotitles">Football 360</h2>
            </div>
        </div>
    </div>
@endsection
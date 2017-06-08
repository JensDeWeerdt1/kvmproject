@extends('layouts.app')

@section('content')
    <div class="container videoplayer">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <iframe width="560" height="315" src="{{ $videoSrc }}" frameborder="0" allowfullscreen></iframe>
                <h2 class="videotitles">Football 360</h2>
            </div>
        </div>
        <div class="row" id="app">
            <h1>Chatbox</h1>
            <chat-log :messages="messages"></chat-log>
            <chat-composer v-on:messagesent="addMessage"></chat-composer>
        </div>
    </div>

@endsection
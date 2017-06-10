@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            <h4>Voordat u doorgaat ...</h4>
            <h2>Komt u in het stadion naar de match KVM - Lierse kijken?</h2>
                <div class="btncontainer">
                    <a class="btn btn-primary comingbtn" href="/home">
                        Ja
                    </a>
                    <a class="btn btn-primary comingbtn" href="/home">
                        Nee
                    </a>
        </div>
            </div>
        </div>
        </div>
    </div>
@endsection
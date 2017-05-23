@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
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
             <ul class="flexcontainer">
                <a href="#"><li class="flex-item"><img class="overview" src="../../images/overview2.jpg" alt="sfeer image"></li><div class="flexcontainer1"><h3 class="flex-item1">KVM</h3><h3 class="flex-item1">0-0</h3><h3 class="flex-item1">Lierse</h3></div></a>
                <a href="#"><li class="flex-item"><img class="overview" src="../../images/overview2.jpg" alt="sfeer image"></li><div class="flexcontainer1"><h3 class="flex-item1">KVM</h3><h3 class="flex-item1">0-0</h3><h3 class="flex-item1">Lierse</h3></div></a>
                <a href="#"><li class="flex-item"><img class="overview" src="../../images/overview2.jpg" alt="sfeer image"></li><div class="flexcontainer1"><h3 class="flex-item1">KVM</h3><h3 class="flex-item1">0-0</h3><h3 class="flex-item1">Lierse</h3></div></a>
             </ul>
        </div>
    </div>
</div>
@endsection

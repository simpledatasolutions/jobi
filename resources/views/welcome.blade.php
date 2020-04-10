@extends('layouts.app')

@section('title')
<title>Home | Jobi Tax</title>
@endsection

@section('is-active-home')
class="active"
@endsection

@section('content')

<div id="demo" class="carousel slide" data-ride="carousel">

<!-- Indicators -->
<ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
</ul>

<!-- The slideshow -->
<div class="carousel-inner">
    <div class="text-center carousel-item active" style="background:#5f8aa9;">
    <br>
    <h2 class="font_2">
        <p>Launching</p>
        <p>JUN 2020</p>
    </h2>
    <br><br><br>
    <a href="{{ url('/register') }}" class="btn-rg">Register</a>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    </div>
</div>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
</a>

</div>
@endsection
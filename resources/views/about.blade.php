@extends('layouts.app')

@section('title')
<title>About | Jobi Tax</title>
@endsection

@section('is-active-about')
class="active"
@endsection

@section('content')

<span id="about-page"><hr></span>
<br><br><br>
<div class="container-sm" id="about-page">
    
    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        
        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="text-left carousel-item active">
                <br>
                <h3>About Jobi</h3><br>
                <p>
                    Claiming back your tax is faster and easier than ever! <br>
                    let Jobi do all the calculations required to obtain the maximum tax return at the fraction of the cost. 
                </p>
            </div>
            <div class="text-left carousel-item">
                <br>
                <h3>Who is Jobi?</h3><br>
                <p>
                    Jobi is a group of Accountants, Engineers and Computer Scientists who believe the current
                    way that tax is done and lodged is outdated and riddled with human error. 
                </p>
            </div>
            <div class="text-left carousel-item">
                <br>
                <h3>Why are we doing this?</h3><br>
                <p style="width:80%;">
                    Foreign employees play a crucial role in the Australian economy. There are 2.17 million
                    people presently in Australia on a temporary visa. The majority of the temporary visa holders have one thing in
                    common, all of them work and pay tax. Most of them do not know how to claim their tax
                    return, hence, most of them spend money consulting an accountant to do a poor job.  <br><br>
                    with Jobi tax we have leveraged our expertise in artificial intelligence and machine learning to allow an automated tax return at the fraction of the cost of using an accountant. 
                </p>
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
</div>
<br><br><br>

@endsection
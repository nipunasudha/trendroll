@if(!isset($tab))
<?php
$tab="none";
 ?>
 {{"Unknown page!"}}
@endif
<div class="head-bar">
    <div class="container">
        <div class="div-logo"> <img src="{{asset('img/TR%20logo%20v1.png')}}"> </div>
        <div class="btn-group username-group">
            @if (Auth::guest())
            <!-- <li><a href="{{ url('/login') }}">Login</a></li>
            <li><a href="{{ url('/register') }}">Register</a></li> -->
            <input class="btn btn-primary" type="button" onclick="location.href='{{url('login')}}';" value="Login" />
            <input class="btn btn-primary" type="button" onclick="location.href='{{url('register')}}';" value="Sign up" />
            @else
            <button class="btn btn-primary" type="button" onclick="location.href='{{url('profile')}}';">{{ Auth::user()->name }} </button>
            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button"> <span class="caret"></span> <span class="sr-only">Toggle Dropdown</span> </button>
            <ul role="menu" class="dropdown-menu">
                <li><a href="{{url('profile')}}">My Account</a></li>
                <li><a href="{{url('logout')}}">Logout</a></li>

                <!-- <li class="divider"></li> -->

            </ul>
            @endif

        </div>
        <!-- /btn-group -->

        <div class="div-cart">
            <div class="col-xs-8" style="padding:0px;">
                <p class="cart-stat">Rs.2600.00</p>
            </div>
            <div class="col-xs-4" style="padding:0px;"> <a href="#fakelink" class="btn btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span></a> </div>
        </div>
    </div>
</div>
<!-- Static navbar -->
<div class="navbar navbar-default " role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> </button>
            <a class="navbar-brand" href="{{ url('home') }}">TrendRoll.lk</a> </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">

                <li @if($tab=="home") class="active"@endif><a href="{{ url('home') }}">Home</a></li>
                <li @if($tab=="her") class="active"@endif><a href="{{ url('products/her') }}">For Her</a></li>
                <li @if($tab=="him") class="active"@endif><a href="{{ url('products/him') }}">For Him</a></li>
                <li @if($tab=="sellers") class="active"@endif><a href="{{ url('/sellers') }}">Sellers</a></li>
                <li @if($tab=="account" || $tab=="login" || $tab=="register" ) class="active"@endif><a href="{{ url('profile/dashboard') }}">My Account</a></li>
                <li><a href="{{ url('/admin') }}">*Admin*</a></li>


            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#contact">About</a></li>
                <li><a href="#contact">Support</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>

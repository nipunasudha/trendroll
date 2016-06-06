@extends('layouts.frontend')

@section('content')

<div class="container">
   <div class="row">
    <center>
      @include('elements.user_account_nav')
    </center>

  </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                  @if($page=="dashboard")
                  @include('elements.profile_pages.dashboard')
                  @elseif($page=="products")
                  @include('elements.profile_pages.products')
                  @elseif($page=="orders")
                  @include('elements.profile_pages.orders')
                  @elseif($page=="reviews")
                  @include('elements.profile_pages.reviews')
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
<link href="{{ URL::asset('css/user_profile_style.css') }}" rel="stylesheet">
@endsection

@extends('layouts.frontend') @section('content')
<link href="{{ URL::asset('css/homepage_demo.css') }}" rel="stylesheet">
<div class="container">

  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Welcome to {{$forwhome}} page.</div>

        <div class="panel-body">
          This is a dummy of {{$forwhome}} page.
        </div>
      </div>
    </div>
    <div class="col-xs-12 slider-box-demo" style="background-color:{{($forwhome=='her')? '#ff8096':'#75d9f7'}};"></div>

    @foreach($product_list as $product)
    <div class="box-outer-demo col-md-3">
    <a href="{{url('products/'.$forwhome.'/view/'.$product->id)}}" > <div class="item-boxes-demo" style="color:white;">{{$product->name}}</div>
    </a></div>
    @endforeach

  </div>
</div>
@endsection

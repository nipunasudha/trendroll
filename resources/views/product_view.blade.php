@extends('layouts.frontend') @section('content')
<?php
echo "Item id is - ". $item->id;

?>
<link href="{{ URL::asset('css/product_view_style.css') }}" rel="stylesheet">
<div class="row detail-div">
  <div class="col-md-6">
    <div class="product-image-outer">

    </div>
  </div>
  <div class="col-md-6 detail-section">
    <table class="table-striped">

      <tr>
        <td>Name:</td>
        <td>{{$item->name}}</td>
      </tr>

      <tr>
        <td>Seller ID:</td>
        <td>{{$item->seller_id}}</td>
      </tr>
      <tr>
        <td>Price:</td>
        <td>{{$item->price}}</td>
      </tr>
      <tr>
        <td>Added On:</td>
        <td>{{$item->created_at}}</td>
      </tr>
      <tr>
        <td>Modified On:</td>
        <td>{{$item->updated_at}}</td>
      </tr>
    </table>
  </div>
</div>
















@endsection

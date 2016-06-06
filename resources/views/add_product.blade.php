@extends('layouts.backend') @section('content')

<form class="form-horizontal" method="POST" action="{{ url('list') }}">
<fieldset>

<!-- Form Name -->
<legend>Insert Product</legend>
{{ csrf_field() }}

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Product Name</label>  
  <div class="col-md-5">
  <input id="name" name="name" type="text" placeholder="Enter Product Name" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="price">Price</label>  
  <div class="col-md-4">
  <input id="price" name="price" type="text" placeholder="Enter Price" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="collection_id">Collection ID</label>  
  <div class="col-md-4">
  <input id="collection_id" name="collection_id" type="text" placeholder="Enter Collection ID" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="seller_id">Seller ID</label>  
  <div class="col-md-4">
  <input id="seller_id" name="seller_id" type="text" placeholder="Enter Seller ID" class="form-control input-md" required="">
    
  </div>
</div>



</fieldset>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit">Submit</label>
  <div class="col-md-4">
    <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</div>
</form>


@endsection

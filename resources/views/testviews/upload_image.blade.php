@extends('layouts.backend')
@section('content')
<h1>Hey. You wanna upload?</h1>
<form action="{{url('upload')}}" method="post" enctype="multipart/form-data">
  {{ csrf_field() }}
  <label>Select image to upload :</label>
  <input type="file" name="myfile" value="" id="myfile">
  <input type="submit" name="submit" value="Upload">
</form>
@endsection

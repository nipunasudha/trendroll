<!DOCTYPE html>
<html lang="en">
<?php
if(!isset($tab)){
  $tab="";
  echo "Unknown Page. Please Fix!";
}
 ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
 <link rel="shortcut icon" href="{{ asset('trlogo_for_title.png') }}">
    <!-- Fonts -->
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">  -->
    <!-- Styles -->
    <link href="{{ URL::asset('tools/FlatUI/css/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('tools/FlatUI/css/flat-ui.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/frontend_generic_style.css') }}" rel="stylesheet">
<script src= "{{ URL::asset('tools/FlatUI/js/vendor/jquery.min.js') }}"></script>


    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">

  @include('elements/frontend_header')
  <div class="container">
    @include('elements/breadcrumb')
  </div>

  @if($tab!="login" && $tab!="register" && $tab!="reset")
    @include('elements/frontend_searchbox')
  @endif

  <div class="container main-content">

    @yield('content')
  </div>
@include('elements/frontend_footer')

    <!-- JavaScripts -->

   <script src= "{{ URL::asset('tools/FlatUI/js/flat-ui.js') }}"></script>

   <script src= "{{ URL::asset('tools/FlatUI/assets/js/application.js') }}"></script>
   <script src= "{{ URL::asset('js/frontend_generic_script.js') }}"></script>


</body>
</html>

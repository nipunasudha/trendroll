<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Vue Test Page</title>
  <link href="{{ URL::asset('tools\bootstrap-3.3.6-dist\css\bootstrap.min.css') }}" rel="stylesheet">
  <script src= "{{ URL::asset('tools\jquery.min.js') }}"></script>
  <script src= "{{ URL::asset('tools\vue.js') }}"></script>


</head>
<body>
<style media="screen"></style>


<div id="app">
  @{{ message }}
</div>






<script type="text/javascript">

new Vue({
  el: '#app',
  data: {
    message: 'Hello Vue.js!'
  }
})

</script>

</body>
<script src= "{{ URL::asset('tools\bootstrap-3.3.6-dist\js\bootstrap.min.js') }}"></script>

</html>

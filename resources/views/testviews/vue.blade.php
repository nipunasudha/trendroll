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











@include('testelements.divider',['caption'=>'Hello world'])
<!-- simple as fuck, hello world -->
<div id="app">
  @{{ message }}
</div>
@include('testelements.divider',['caption'=>'Two way binding'])
<!-- two way binding -->
<div id="app2">
  <p>@{{ message }}</p>
  <input v-model="message">
</div>
@include('testelements.divider',['caption'=>'Render a list'])
<div id="app3">
  <ul>
    <li v-for="todo in todos">
      @{{ todo.text }}
    </li>
  </ul>
</div>

@include('testelements.divider',['caption'=>'Render a list'])






















<script type="text/javascript">

new Vue({ //hello world
  el: '#app',
  data: {
    message: 'Hello Vue.js!'
  }
})
new Vue({
  el: '#app2',
  data: {
    message: 'Hello Vue.js!'
  }
})
new Vue({
  el: '#app3',
  data: {
    todos: [
      { text: 'Learn JavaScript' },
      { text: 'Learn Vue.js' },
      { text: 'Build Something Awesome' }
    ]
  }
})





</script>

</body>
<script src= "{{ URL::asset('tools\bootstrap-3.3.6-dist\js\bootstrap.min.js') }}"></script>

</html>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="_token" content="{!! csrf_token() !!}"/>
  <title></title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<style media="screen">

</style>

</head>
<body>
  <div class="container">
    <h1>Ajax test</h1>
    <h2>Coffe Oders</h2>
    <h4>Add an order!</h4>
    <p>
      Name: <input type="text" name="name" value="" id="name">
    </p>

    <p>
      Drink: <input type="text" name="drink" value="" id="drink">
    </p>
    <button type="button" name="addbutton" id="add">Add item!</button>
    <button type="button" name="postbutton" id="postbackend">Post item!</button>


    <h4>These are the orders!</h4>
    <ul id="orders">

    </ul>

  </div>





</body>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script>

$('#add').on('click',function(){
  $.ajax({
    type:'GET',
    url:'/getjson',
    success:function(data){
      $('#orders').append('<li>'+data.name+'</li>');
    },
    error:function(){
      alert('bad URL!');
    }
})

})
$('#postbackend').on('click',function(){

  var $name=$('#name');
  var $drink=$('#drink');
  var order={
    name:$name.val(),
    drink:$drink.val()
  };
  $.ajax({
    type:'POST',
    url:'/postjson',
    data:order,
    success:function(newOrder){
     $('#orders').append('<li>'+newOrder.name + ' - ' + newOrder.drink + '</li>');

    },
    error:function(){
      alert('bad URL!');
    }
})

})
</script>
<script type="text/javascript">
$.ajaxSetup({
   headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
});
</script>
</html>

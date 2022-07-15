
<!DOCTYPE html>
<html>
<head>
	<title>Jquery</title>
	<style>
		
		#div1{

 border: 2px outset red;
 background-color: lightblue;
 text-align: center;

		}

/*.before-second
{
	 background-color: lightblue;
}*/

	#div2{

 border: 2px outset red;
 background-color: lightblue;
 text-align: center;

		}

		.first{background-color: red;}
		.second{background-color: black !important;}

</style>

</head>
<body>

<div id="div1">
	<h5>
	div1:::	Even after a long time working with JSON and jQuery AJAX requests, I made the silly mistake today of writing my value for the "data" parameter as a string rather than an object.
	</h5>
</div>
<br><br>

<div id="div2">
	<h5>
		div2:::Even after a long time working with JSON and jQuery AJAX requests, I made the silly mistake today of writing my value for the "data" parameter as a string rather than an object.
		<p>hello</p>
	</h5>
</div>

<input type="button" name="button" id="button1" value="show div">
<input type="button" name="button" id="button2" value="hide div"><br><br><br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
	
$(document).ready(function(){
$('#button').click(function(){
$('#div1').css('background-color', 'green');
//$('#div1').hide();
});

$('#button').dblclick(function(){
$('#div1').css('background-color', 'blue');
});

$('#button2').click(function(){

$('#div2').toggle();

});

$('#button').click(function(){

$('#div2').show();

});


});

</script>
<form id="sform">

Name: <input type="text" name="name" id="name"><br>

Phone: <input type="text" name="phone" id="phone"><br>

RollNO:<select name="roll" id="roll">
       <option value="01">01</option>
      <option value="02">02</option>
      <option value="03">03</option>
      <option value="04">04</option>
</select>
<input type="submit" name="submit" id="submit">

</form><br><br>

<div id="sdiv" style="border-style: dashed;">

	<h1></h1>
	
</div><br>

<input type="button" name="botton" id="button3" value="Set value">

<script type="text/javascript">
	
 $(document).ready(function(){

//  	$('#roll').change(function(){
//  var a = $(this).val();
//     $('#sdiv').html(a);
// });
 
// $('#sform').submit(function(){
//  var a = $(this).val();
//     $('#sdiv').html(a);

//  });

$('#sform').submit(function(){
 var name = $('#name').val();
 var phone = $('#phone').val();
var roll =  $('#roll').val();
//alert("Name:" +name+ "Phone:" +phone+"RollNO:"+roll);
$('#sdiv').html(name,phone,roll);
 });

$('#sdiv').click(function(){
$('#sdiv h1').html("Hello Everyone");
});

$('#button3').click(function(){
//$('#div1').removeClass("before-second");

$('#div1').addClass("second");
});


 });


</script>

</body>
</html>



















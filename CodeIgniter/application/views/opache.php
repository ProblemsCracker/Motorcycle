<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>profile</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
	$("#transbox1").css("display","block");
	$("#transbox2").css("display","none");
	$("#transbox3").css("display","none");
});
$(document).ready(function() {
      $("#form1").validate({
        rules: {
          username: "required",// simple rule, converted to {required:true}
		  password: "required",
          email: {email: true},
		  firstName: "required",
		  lastName: "required",
		  phone: {digits:true, maxlength:10, minlength: 10},
        },
        messages: {
          email: "Enter a valid email",
		  phone: "Enter a valid phone number",
        }
      });
    });
function recommend(){
	$("#transbox1").css("display","none");
	$("#transbox2").css("display","block");
}

function goback1(){
	$("#transbox1").css("display","block");
	$("#transbox2").css("display","none");
}

function switch1(){
	$("#transbox2").css("display","none");
	$("#transbox3").css("display","block");
}

function goback2(){
	$("#transbox2").css("display","block");
	$("#transbox3").css("display","none");
}

function switch2(){
	location.assign("http://localhost/CodeIgniter/index.php/Main_page/info/4");
}
</script>
  <style type="text/css">
    label.error { font-size:12px; color: red; display:block}
     div.background {
    width: 500px;
    height: 250px;
    
    border: 2px solid black;
}
body{
	background-image: url("../image/backgrounds/background.jpg");
	background-repeat: no-repeat;
	background-size: 100% 100%;
}
div.transbox {
/*     width: 400px; */
/*     height: 180px; */
/*   margin: 30px 50px; */
    background-color: #ffffff;
    border: 1px solid black;
    opacity: 0.8;
    filter: alpha(opacity=60); /* For IE8 and earlier */
    margin: 100px;
    border-radius: 15px;
}
div.transbox p {
    margin: 30px 40px;
    font-weight: bold;
    color: #000000;
    
}
.border {
	border: 1px solid blue;
}

table {
	text-align: center;
	width: 100%;
	border-collapse: collapse;
	border: none;
	opacity: 1;
}

p{
	text-align: center;
}

h1 { 
    display: block;
    font-size: 2em;
    margin-top: 0.67em;
    margin-bottom: 0.67em;
    margin-left: 0;
    margin-right: 0;
    font-weight: bold;
    text-align: center;
}

  </style>
      <!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
</head>

<body class="opache">
<div class="transbox" id="transbox1">
<table>
		<tr>
			<td><img src="../image/novice.png"></td>
			<td><img src="../image/expert.png"></td>
		</tr>
		<tr>
			<td><button class="btn btn-info btn-lg " type="button" onclick=recommend()><span class="glyphicon glyphicon-play"></span> Start My Motor Career</button></td>
			<td><button class="btn btn-info btn-lg " type="button" onclick=location.assign("/CodeIgniter/index.php/Main_page")><span class="glyphicon glyphicon-home"></span> Go Back To Homepage</button></td>
		</tr>
</table>

</div>


<div class="transbox" id="transbox2">
<h1>Click on a model you like</h1>
<table>
		<tr onclick=switch1()>
			<td class="border"><img src="../image/200671310194680984_p.jpg"></td>
			<td class="border"><img src="../image/pic1.jpg"></td>
			<td class="border"><img src="../image/slider1.png"></td>
		</tr>
</table>
<p><button onclick=goback1() class="btn btn-info btn-lg"><span class="glyphicon glyphicon-backward"></span> GO BACK</button></p>
</div>

<div class="transbox" id="transbox3">
<h1>Click another model for our recommendation</h1>
<table>
		<tr onclick=switch2()>
			<td class="border"><img src="../image/softa8_p.jpg"></td>
			<td class="border"><img src="../image/moteos24_p.jpg"></td>
			<td class="border"><img src="../image/motocycle1.jpg"></td>
		</tr>
</table>
<p><button onclick=goback2() class="btn btn-info btn-lg"><span class="glyphicon glyphicon-backward"></span> GO BACK</button></p>
</div>

</body>
</html>
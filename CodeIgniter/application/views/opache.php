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

function switch1(){
	$("#transbox2").css("display","none");
	$("#transbox3").css("display","block");
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
table,th,td {
	border: 1px solid black;
	border: 10px;
	margin:30px;
}


table {
	text-align: center;
	width: 100%;
	border-collapse: collapse;
	border: none;
	opacity: 1;
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
			<td><button class="btn btn-success btn-lg " type="button" onclick=recommend()>Recommend a model for me		</button></td>
			<td><button class="btn btn-success btn-lg " type="button" onclick=location.assign("/CodeIgniter/index.php/Main_page")>Go back to site		</button></td>
		</tr>
</table>

</div>


<div class="transbox" id="transbox2">
<h1>Which model looks best for you?</h1>
<h2>Click on any</h2>
<table>
		<tr onclick=switch1()>
			<td><img src="../image/200671310194680984_p.jpg"></td>
			<td><img src="../image/pic1.jpg"></td>
			<td><img src="../image/slider1.png"></td>
		</tr>
</table>
</div>

<div class="transbox" id="transbox3">
<h1>Final step for us to learn you interest before make recommendation</h1>
<h2>Click on any</h2>
<table>
		<tr onclick=switch2()>
			<td><img src="../image/softa8_p.jpg"></td>
			<td><img src="../image/moteos24_p.jpg"></td>
			<td><img src="../image/motocycle1.jpg"></td>
		</tr>
</table>
</div>

</body>
</html>
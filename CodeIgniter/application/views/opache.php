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
    $("#div1").fadeIn(1000);
    $("#div2").fadeIn(2000);
    $("#div3").fadeIn(3000);
	$("#div4").fadeIn(3000);
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
	border: none;
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
<div class="transbox">
<table>
		<tr>
			<td><img src="../image/novice.bmp"></td>
			<td><img src="../image/expert.bmp"></td>
		</tr>
		<tr>
			<td><button class="btn btn-success btn-lg " type="button">Fit a model now!		</button></td>
			<td><button class="btn btn-success btn-lg " type="button">Go back to site		</button></td>
		</tr>
</table>


</div>

</body>
</html>
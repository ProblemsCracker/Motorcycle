<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>profile</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.js"></script>
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
  </style>
</head>
<body>
<div class="register">
<h1 style="text-align:center"><span id="div1" style="display:none">Welcome</span><span id="div2" style="display:none"> New</span><span id="div3" style="display:none"> Customer</span></h1>
<div id="div4" style="display:none">
<form id="form1" name='f1' method="post" action='../../../../../../../../../../CodeIgniter/index.php/Main_page/store_register'>
<table width="500px" align="center">
    <tr>
		<th>*Username:</th>
        <td><input type="text" maxlength="30" name="username"></td>
   	</tr>
	<tr>
		<th>*Password:</th>
        <td><input type="password" maxlength="32" name="password"></td>
   	</tr>
	<tr>
		<th>*First Name:</th>
        <td><input type="text" maxlength="30" name="firstName"></td>
   	</tr>
	<tr>
		<th>*Last Name:</th>
        <td><input type="text" maxlength="30" name="lastName"></td>
   	</tr>    
	<tr>
		<th>Phone Number:</th>
        <td><input type="text" name="phone" maxlength="10"></td>
   	</tr>     
  	<tr>
		<th>Email: </th>
        <td><input type="text" name="email" maxlength="35"></td>
   	</tr>  
</table>
<br/>
<p align="center" style="color:red;">* Must Fill</p>
<table class="button" align="center">
<tr><td><input  type="submit" value="Save"></td>
<td><input  type="button" value="Back" onclick="goBack()"></td></tr>
</table>
</form>   
</div>
</div>
  
<script>
function goBack()
{
	history.go(-1);	
}
</script>
</body>
</html>
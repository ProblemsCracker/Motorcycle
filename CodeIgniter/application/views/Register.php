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
          email: "required",
		  firstName: "required",
		  lastName: "required",
		  phone: {digits:true, maxlength:10, minlength: 10},
        },
        messages: {
		  phone: "Enter a valid phone number",
        }
      });
    });
</script>
  <style type="text/css">
    label.error { font-size:12px; color: red; display:block}
	.star { color: #FF0000 }
  </style>
      <!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
</head>
<body>
<div class="register">
<h1 style="text-align:center"><span id="div1" style="display:none">Welcome</span><span id="div2" style="display:none"> New</span><span id="div3" style="display:none"> Customer</span></h1>
<div id="div4" style="display:none">
<div class="well">
<form id="form1" class="form-horizontal" role="form" name='f1' method="post" action='../../../../../../../../../../CodeIgniter/index.php/Main_page/store_register'>
<div class="form-group">
    <label for="username" class="col-sm-2 control-label"><span class="star">*</span>Username</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" placeholder="Username" name="username">
    </div>
  </div>
  <div class="form-group">
    <label for="username" class="col-sm-2 control-label"><span class="star">*</span>Password</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" placeholder="Password" name="password">
    </div>
  </div>
  <div class="form-group">
    <label for="firstName" class="col-sm-2 control-label"><span class="star">*</span>FirstName</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" placeholder="First Name" name="firstName">
    </div>
  </div>
  <div class="form-group">
    <label for="username" class="col-sm-2 control-label"><span class="star">*</span>LastName</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" placeholder="Last Name" name="lastName">
    </div>
  </div>
  <div class="form-group">
    <label for="username" class="col-sm-2 control-label"><span class="star">*</span>EmailAddress</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" placeholder="Email" name="email">
    </div>
  </div>
  <div class="form-group">
    <label for="username" class="col-sm-2 control-label">PhoneNumber</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" placeholder="Phone Number" name="phone">
    </div>
  </div>
<br/>
<div class="container">
<input type="submit" value="Save" class="btn btn-success">&nbsp;&nbsp;
<input type="button" value="Back" onclick="goBack()"  class="btn btn-danger">
</div>
</form> 
</div>  
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
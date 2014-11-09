<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>prelogin</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../docs-assets/js/html5shiv.js"></script>
      <script src="../../docs-assets/js/respond.min.js"></script>
    <![endif]-->
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
</head>

<body>
<div class="register">
<div class="well">
<form action="../Main_page" method="post" class="form-horizontal">
	<div class="form-group">
	<label style="font-size:20px">Username: </label>
     <div class="col-sm-12">
    	<input class="form-control" type="text" name='username' value=""/>
        </div>
    </div>
    <div class="form-group">
    <label style="font-size:20px">Password:&nbsp;</label> 
     	<div class="col-sm-12">
    	<input class="form-control" type="password" name="password" value="">
        </div>
    </div>
    <br/>
    <div class="container">
     <div class="form-group">
    <input class="btn btn-primary" data-inline='true' data-role='button' type="submit" value="Submit">&nbsp;
    <input class="btn btn-danger" data-inline='true' data-role='button' type="button" value="GoBack" onclick="javascript:window.location.href='../../../../../../../../../../CodeIgniter/index.php/Main_page'">&nbsp;&nbsp;&nbsp;&nbsp;
	 Not a member? <a href="javascript:window.location.href='../../../../../../../../../../CodeIgniter/index.php/Main_page/register'">Go to register</a>
	 </div>
     </div>
</form>
</div>

</div>
</body>
</html>
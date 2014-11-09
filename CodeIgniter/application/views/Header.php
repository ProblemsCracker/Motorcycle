<?php
$dataArray = $this->session->all_userdata();
if(!$this->session->userdata('username'))
	echo "<div class='navbar navbar-inverse navbar-fixed-top' role='navigation'>
	
	<form class=\"navbar-form navbar-left\" method=\"post\" data-inline='true'  action=\"../../../../../../../../../../CodeIgniter/index.php/Main_page/search_product\">
		<div class=\"form-group\"  style=\"margin-left: 40px;\"><h4 style=\"color: #FFFFFF\">Search: </h4></div>
		<div class=\"form-group\">
          <input name=\"productName\" type=\"text\" class=\"form-control\" placeholder=\"Search\" style=\"width: 400px\">
        </div>
    	<input class=\"btn btn-warning\" type=\"submit\" data-inline='true' value=\"Search\" style=\"font-size:15px; width: 80px\">
	</form>
	
	<div class='navbar-form navbar-right'>
	<div style='position:relative; right:100px'>
	<a data-role='button' class='btn btn-success' data-inline='true' href='../../../../../../../../../../CodeIgniter/index.php/Main_page/login'>Log in</a>&nbsp;
	<a href='../../../../../../../../../../CodeIgniter/index.php/Main_page/register'  class='btn btn-danger' data-role='button' data-inline='true'>Register</a>&nbsp;
	<a data-role='button' class='btn btn-primary' href='../../../../../../../../../../CodeIgniter/index.php/main_page' data-inline='true'><span class='glyphicon glyphicon-home'></span> Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></div></div>";
else
	echo "
	 
	<nav class='navbar navbar-inverse navbar-fixed-top' role='navigation'>
	
	<form class=\"navbar-form navbar-left\" method=\"post\" data-inline='true'  action=\"../../../../../../../../../../CodeIgniter/index.php/Main_page/search_product\">
		<div class=\"form-group\"  style=\"margin-left: 40px;\"><h4 style=\"color: #FFFFFF\">Search: </h4></div>
		<div class=\"form-group\">
          <input name=\"productName\" type=\"text\" class=\"form-control\" placeholder=\"Search\" style=\"width: 400px\">
        </div>
    	<input class=\"btn btn-warning\" type=\"submit\" data-inline='true' value=\"Search\" style=\"font-size:15px; width: 80px\">
	</form>
	
	
	<ul class='navbar-form navbar-right'>
		<div style='position:relative; right:100px'>
		<span style=\"color: #FFFFFF\">Welcome, dear ".$dataArray['username']." !&nbsp;&nbsp;</span>&nbsp;
	
	
		<div class=\"btn-group\">
		  <button type=\"button\" class=\"btn btn-warning dropdown-toggle\" data-toggle=\"dropdown\">Your Account<span class=\"caret\"></span>
		  </button>
		  <ul class=\"dropdown-menu\" role=\"menu\" style=\"font-size:11px\">
		  	<li><a href='#'style=\"font-size:14px\"><b>Your Account</b></a></li>
			<li><a href='../../../../../../../../../../CodeIgniter/index.php/Cart_controller/myCart'><span class='glyphicon glyphicon-shopping-cart'></span>  Your Cart</a></li>
			<li><a href='../../../../../../../../../../CodeIgniter/index.php/Cart_controller/myOrder'><span class='glyphicon glyphicon-inbox'></span>  Your Order</a></li>
			<li><a href='../../../../../../../../../../CodeIgniter/index.php/Main_page/profile/".$dataArray['username']."'><span class='glyphicon glyphicon-user'></span>  Your Profile</a></li>
			<li class=\"divider\"></li>
			<li><a href='../../../../../../../../../../CodeIgniter/index.php/Main_page/logout'><span class='glyphicon glyphicon-off'></span>  Not ".$dataArray['username']."? Log Out</a></li>
		  </ul>
		</div>&nbsp;&nbsp;&nbsp;
		
		
		<a data-role='button' class='btn btn-primary' href='/CodeIgniter/index.php/Main_page' data-inline='true'><span class='glyphicon glyphicon-home'></span>  Home</a>&nbsp;
	</ul></nav></div>
	
	
	

	
	";
?>

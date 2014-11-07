<?php
$dataArray = $this->session->all_userdata();
if(!$this->session->userdata('username'))
	echo "<div class='navbar navbar-inverse navbar-fixed-top' role='navigation'>
	<div class='navbar-form navbar-right'>
	<div style='position:relative; right:100px'>
	<a data-role='button' class='btn btn-primary' data-inline='true' href='../../../../../../../../../../CodeIgniter/index.php/Main_page/login'>Log in</a>&nbsp;<a href='../../../../../../../../../../CodeIgniter/index.php/Main_page/register'  class='btn btn-default' data-role='button' data-inline='true'>Register</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></div></div>";
else
	echo "
	 
	<nav class='navbar navbar-inverse navbar-fixed-top' role='navigation'>
	<ul class='navbar-form navbar-right'>
	<div style='position:relative; right:100px'>
	<li class='btn btn-default '>Welcome, dear ".$dataArray['username']." !&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>&nbsp;<a data-role='button' class='btn btn-primary' href='../../../../../../../../../../CodeIgniter/index.php/Cart_controller/myCart' data-inline='true'>My Cart</a>&nbsp;<a data-inline='true' class='btn btn-success' data-role='button'  href='../../../../../../../../../../CodeIgniter/index.php/Cart_controller/myOrder'>My Order</a>&nbsp;<a data-role='button' data-inline='true' class='btn btn-info' href='../../../../../../../../../../CodeIgniter/index.php/Main_page/profile/".$dataArray['username']."'>My Profile</a>&nbsp;<a data-inline='true' data-role='button' class='btn btn-danger' href='../../../../../../../../../../CodeIgniter/index.php/Main_page/logout'>Log Out</a>&nbsp;</ul></nav></div>";
?>

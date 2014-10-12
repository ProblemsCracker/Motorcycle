<?php
$dataArray = $this->session->all_userdata();
if(!$this->session->userdata('username'))
	echo "<div class='rightTop'><a data-role='button' data-inline='true' href='../../../../../../../../../../CodeIgniter/index.php/Main_page/login'>Log in</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='../../../../../../../../../../CodeIgniter/index.php/Main_page/register' data-role='button' data-inline='true'>Register</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>";
else
	echo "<div class='rightTop'><div>Welcome, dear ".$dataArray['username']." !&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><a data-role='button'  href='../../../../../../../../../../CodeIgniter/index.php/Cart_controller/myCart' data-inline='true'>My Cart</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a data-inline='true' data-role='button'  href='../../../../../../../../../../CodeIgniter/index.php/Cart_controller/myOrder'>My Order</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a data-role='button' data-inline='true' href='../../../../../../../../../../CodeIgniter/index.php/Main_page/profile/".$dataArray['username']."'>My Profile</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a data-inline='true' data-role='button' href='../../../../../../../../../../CodeIgniter/index.php/Main_page/logout'>Log Out</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>";
?>

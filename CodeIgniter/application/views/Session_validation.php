<?php
		if(!$this->session->userdata('customerID'))
		{
			echo "<script>alert('Invalid log!');window.location.href='../../../../../../../../../../CodeIgniter/index.php/Main_page/login';</script>";
			return;
		}
?>
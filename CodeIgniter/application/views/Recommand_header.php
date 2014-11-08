<?php
	if(isset($_SESSION['success_add_cart']))
	{
		echo "<div class='container'>
					<div class='alert alert-block alert-success'>
					<a class='close' data-dismiss='alert'>×</a>
					 <h3 class='alert-heading'>Success!</h3>
					 <h4>The product has been added to your cart!<h4>
					</div>
				  </div>";	
	}
	unset($_SESSION['success_add_cart']);
?>
<h1 style="text-align:center">Guess You Like</h1>
<div name="product" style="width:100%">

<?php
	if(isset($_SESSION['success_add_cart']))
	{
		echo "<div class='container'>
					<div class='alert alert-block alert-success'>
					<a class='close' data-dismiss='alert'>x</a>
					 <h3 class='alert-heading'>Success!</h3>
					 <h4>The product has been added to your cart!<h4>
					</div>
				  </div>";	
	}
	unset($_SESSION['success_add_cart']);
?>
<div name="product" style="width:100%">
<br><br>
 
<div> <a href="../../../../../../../../../../CodeIgniter/index.php/Cart_controller/myCart" class="btn btn-primary" style="width:10%;margin-left:44%;" role="button">Edit cart</a></div>
<br>
<div> <a href="../../../../../../../../../../CodeIgniter/index.php/Main_page" class="btn btn-primary" style="width:10%;margin-left:44%;" role="button">More Motorcycles</a></div>
<br>
<br>
<h1 style="text-align:center">Guess You Like</h1>
<br>

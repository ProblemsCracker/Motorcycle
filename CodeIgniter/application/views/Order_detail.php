<?php
$specialPrice=$totalPrice/$productQuantity;
echo "<h1 align='center' id='orderdetailtitle'>Your Detail Order</h1><div class='detail'>";
echo '<table width="400px" id="orderdetail" style="text-align:left;" align="center" class="table table-
bordered,table table-striped">
<tr><th class="success">Product Name</th><td class="success">'.$productName.'</td></tr><tr>
<th class="success">Description</th><td class="success">'.$productDescription.'</td></tr><tr>
<th class="success">Unit Price</th>';
if($specialPrice!=$productPrice)
	echo '<td style="color:red" class="success">'.$specialPrice.'</td>';
else
	echo '<td class="success" >$ ".$productPrice."</td>';
echo '</tr><tr><th class="success">Quantity</th><td class="success">'.$productQuantity.'</td></tr><tr>
<th class="success">Total Price</th><td class="success">'.'$'.$totalPrice.'</td></tr><tr>
<th class="success">Transaction Time</th><td class="success">'.$orderDate.'</td></tr><tr>
<th class="success">Shipping Address</th><td class="success">'.$shippingAddress.'</td></tr><tr>
<th class="success">Shipping Zipcode</th><td class="success">'.$shippingZipcode.'</td></tr><tr>
<th class="success">Card Number</th><td class="success">'.$cardNumber.'</td></tr><tr>
<th class="success">Billing Address</th><td class="success">'.$billingAddress.'</td></tr><tr>
<th class="success">Billing Zipcode</th><td class="success">'.$billingZipcode.'</td></tr>';
echo '</table>';
echo "</div><p id='orderdetailtile'  style='color:red' >* Red price means special price. </p>
<p>
<a id='a' href='../../../../../../../../../../CodeIgniter/index.php/Cart_controller/myOrder' data-inline='true' data-role='button' class='btn btn-primary'>Go back</a></p>
<<<<<<< HEAD
<img id='ordersimage' src='../../../../../../../../../../CodeIgniter/image/".$productImage."' width='20%' height='30%'></a></p>
=======
<img id='orderimage' src='../../../../../../../../../../CodeIgniter/image/".$productImage."' width='20%' height='30%'></a></p>
>>>>>>> origin/master

";
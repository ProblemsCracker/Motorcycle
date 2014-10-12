<?php
$specialPrice=$totalPrice/$productQuantity;
echo "<h1 align='center'>Your Detail Order</h1><div class='detail'>";
echo '<table width="400px" style="text-align:left;" align="center">
<tr><th>Product Name</th><td>'.$productName.'</td></tr><tr><th>Description</th><td>'.$productDescription.'</td></tr><tr><th>Unit Price</th>';
if($specialPrice!=$productPrice)
	echo "<td style='color:red'>$ ".$specialPrice."</td>";
else
	echo "<td>$ ".$productPrice."</td>";
echo '</tr><tr><th>Quantity</th><td>'.$productQuantity.'</td></tr><tr><th>Total Price</th><td>'.'$'.$totalPrice.'</td></tr><tr><th>Transaction Time</th><td>'.$orderDate.'</td></tr><tr><th>Shipping Address</th><td>'.$shippingAddress.'</td></tr><tr><th>Shipping Zipcode</th><td>'.$shippingZipcode.'</td></tr><tr><th>Card Number</th><td>'.$cardNumber.'</td></tr><tr><th>Billing Address</th><td>'.$billingAddress.'</td></tr><tr><th>Billing Zipcode</th><td>'.$billingZipcode.'</td></tr>';
echo '</table>';
echo "<p align='center' style='color:red'>* Red price means special price. </p></div><p style='width:100px; margin-left:auto; margin-right:auto'><a href='../../../../../../../../../../CodeIgniter/index.php/Cart_controller/myOrder' data-inline='true' data-role='button' >Go back</a></p>";
?>
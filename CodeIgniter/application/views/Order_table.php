<?php
$specialPrice=$totalPrice/$productQuantity;
echo '<tr><td>'.$productName.'</td><td>'.$productDescription.'</td><td>'.$productCategoryName.'</td>';
if($specialPrice!=$productPrice)
	echo "<td style='color:red'>$ ".$specialPrice."</td>";
else
	echo "<td>$ ".$productPrice."</td>";
echo '<td>'.$productQuantity.'</td><td>'.'$'.$totalPrice.'</td><td>'.$orderDate.'</td><td><a href="../../../../../../../../../../CodeIgniter/index.php/Cart_controller/orderDetail/'.$paidID.'">Detail</a></td></tr>';
?>
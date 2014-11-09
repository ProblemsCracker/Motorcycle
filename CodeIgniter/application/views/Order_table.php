
<?php
static $productNumber=738472023;
echo '
<tr class="active">
<td colspan="4" style="font-weight:bold"><h2>'.$productName.'</h2></td>
</tr>

<tr> <td><image src="../../../../../../../../../../CodeIgniter/image/'.$productImage.'">'.'</td> 
	 
	 <td><br><br>Order Number<br>'.$productNumber.'<br><br><br>Order Placed<br>'.$orderDate.'</td> 
	 <td><br><br>Quantity<br>'.$productQuantity.'<br><br><br>Total Price<br>$'.$totalPrice.'</td>	 
	 <td align="right" colspan="4"><br><br>
		 <div> <a href="../../../../../../../../../../CodeIgniter/index.php/Main_page" class="btn btn-primary" style="width:100%" role="button">Product Page</a></div><br>
		 <div> <a href="../../../../../../../../../../CodeIgniter/index.php/Cart_controller/orderDetail/'.$paidID.'" class="btn btn-primary" style="width:100%" role="button">Oder Detail</a></div><br>
		 <div> <a href="../../../../../../../../../../CodeIgniter/index.php/Main_page" class="btn btn-primary" style="width:100%" role="button">Cancel Order</a></div>
</tr>


	 
	 </td>
</tr>

'
?>
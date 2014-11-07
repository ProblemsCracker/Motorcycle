
<?php
static $productNumber=123456;
echo '
<tr class="active">
<td colspan="4" style="color:blue">'.$productName.'</td>
</tr>

<tr> <td><image src="../../../../../../../../../../CodeIgniter/image/'.$productImage.'">'.'</td> 
	 
	 <td><br><br>Order Number<br>'.$productNumber.'<br><br><br>Order Placed<br>'.$orderDate.'</td> 
	 <td><br><br>Quantity<br>'.$productQuantity.'<br><br><br>Total Price<br>'.$totalPrice.'</td>	 
	 <td align="right" colspan="4"><br><br><button type="button" class="btn btn-primary" style="width:70%">Product Page</button><br><br>
	 	 <button type="button" class="btn btn-primary" style="width:70%">Order Details</button><br><br>
	 	 <button type="button" class="btn btn-primary" style="width:70%">Delete Order</button>
</tr>


	 
	 </td>
</tr>

'
?>

<?php
static $productNumber=123456;
echo '
<tr class="active">
<<<<<<< HEAD
<td colspan="4" style="color:blue">'.$productName.'</td>
=======
<td colspan="4" style="color:blue; font-weight:bold">'.$productName.'</td>
>>>>>>> 08b21fb689a4e68db3c12cdcd1d2e1e34da70c6c
</tr>

<tr> <td><image src="../../../../../../../../../../CodeIgniter/image/'.$productImage.'">'.'</td> 
	 
	 <td><br><br>Order Number<br>'.$productNumber.'<br><br><br>Order Placed<br>'.$orderDate.'</td> 
	 <td><br><br>Quantity<br>'.$productQuantity.'<br><br><br>Total Price<br>$'.$totalPrice.'</td>	 
	 <td align="right" colspan="4"><br><br>
		 <div> <a href="../../../../../../../../../../CodeIgniter/index.php/Main_page" class="btn btn-primary" style="width:100%" role="button">Product Page</a></div><br>
		 <div> <a href="../../../../../../../../../../CodeIgniter/index.php/Cart_controller/orderDetail/'.$paidID.'" class="btn btn-primary" style="width:100%" role="button">Oder Detail</a></div><br>
		 <div> <a href="../../../../../../../../../../CodeIgniter/index.php/Main_page" class="btn btn-primary" style="width:100%" role="button">Product Page</a></div>
</tr>


	 
	 </td>
</tr>

'
?>
<?php 
$dataArray = $this->session->all_userdata();
$specialPrice=$totalPrice/$productQuantity;

if($specialPrice!=$productPrice)
	
	echo'
	<tr>
	<td class="active">'.$productName.'</td>
	<td class="active">'.$productDescription.'</td>
	<td class="active">'.$productCategoryName.'</td>
	<td class="active">'.'$ '.$productPrice.'</td>'."
	<td  class='active' style='color:red'>$ ".$specialPrice."</td>
	".'<td class="active">'.$productQuantity.'</td>
	<td class="active">'.'$'.$totalPrice.'</td>
	<td class="active"><a href="../../../../../../../../../../CodeIgniter/index.php/Cart_controller/delete/'.$productID.'">Remove</a></td>
	<td class="active"><a href="../../../../../../../../../../CodeIgniter/index.php/Cart_controller/edit/'.$productID.'">Change</a>
	<td height="100px" width="100px" class="active"><img  width="100%" height="100%" src="../../../../../../../../../../CodeIgniter/image/'.$productImage.'" ></td>
	</td></tr>';
else
	echo '<tr>
	<td class="active">'.$productName.'</td>
	<td class="active">'.$productDescription.'</td>
	<td class="active">'.$productCategoryName.'</td>
	<td class="active">'.'$ '.$productPrice.'</td>'.
	"<td class='active'>---</td>".'<td class="active">'.$productQuantity.'</td>
	<td class="active">'.'$'.$totalPrice.'</td>
	<td class="active"><a href="../../../../../../../../../../CodeIgniter/index.php/Cart_controller/delete/'.$productID.'">Remove</a></td>
	<td class="active"><a href="../../../../../../../../../../CodeIgniter/index.php/Cart_controller/edit/'.$productID.'">Change</a></td>
	<td class="active"  h="100px" width="100px"><img onclick="pic()" width="100%" height="100%" src="../../../../../../../../../../CodeIgniter/image/'.$productImage.'"></td>
	</tr>';

$sum=$this->session->userdata('sum');
$sum+=$totalPrice;
$this->session->set_userdata('sum', $sum);

?>

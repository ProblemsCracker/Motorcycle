<?php 
$dataArray = $this->session->all_userdata();
$specialPrice=$totalPrice/$productQuantity;
if($specialPrice!=$productPrice)
	echo '<tr><td>'.$productName.'</td><td>'.$productDescription.'</td><td>'.$productCategoryName.'</td><td>'.'$ '.$productPrice.'</td>'."<td style='color:red'>$ ".$specialPrice."</td>".'<td>'.$productQuantity.'</td><td>'.'$'.$totalPrice.'</td><td><a href="../../../../../../../../../../CodeIgniter/index.php/Cart_controller/delete/'.$productID.'">Remove</a></td><td><a href="../../../../../../../../../../CodeIgniter/index.php/Cart_controller/edit/'.$productID.'">Change</a></td></tr>';
else
	echo '<tr><td>'.$productName.'</td><td>'.$productDescription.'</td><td>'.$productCategoryName.'</td><td>'.'$ '.$productPrice.'</td>'."<td>---</td>".'<td>'.$productQuantity.'</td><td>'.'$'.$totalPrice.'</td><td><a href="../../../../../../../../../../CodeIgniter/index.php/Cart_controller/delete/'.$productID.'">Remove</a></td><td><a href="../../../../../../../../../../CodeIgniter/index.php/Cart_controller/edit/'.$productID.'">Change</a></td></tr>';
$sum=$this->session->userdata('sum');
$sum+=$totalPrice;
$this->session->set_userdata('sum', $sum);
?>

<?php 
$dataArray = $this->session->all_userdata();
$sum=$this->session->userdata('sum');
if($sum==0)
	echo "<tr><td colspan='9'>------------------------------------No Item------------------------------------<td></tr>";
echo '<tr><td colspan="11" style="color:red;font-size:30px;" id="totalprice" class="active" align="right">Total Price: $ 24000</td></tr>';
echo '</tbody></table><br/><br/><br/>';
echo "<div align='center'>";
if($sum>0)
echo '</tbody></table><br/><br/><br/>';
	echo '<a href="../../../../../../../../../../CodeIgniter/index.php/Cart_controller/checkOut" data-inline="true" data-role="button" class="btn btn-primary">Check out</a>';
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "<a href='../../../../../../../../../../CodeIgniter/index.php/Main_page' data-inline='true' data-role='button' class='btn btn-primary'>See More Product</a></div>";

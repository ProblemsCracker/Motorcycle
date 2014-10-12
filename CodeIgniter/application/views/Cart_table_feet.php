<?php 
$dataArray = $this->session->all_userdata();
$sum=$this->session->userdata('sum');
if($sum==0)
	echo "<tr><td colspan='9'>------------------------------------No Item------------------------------------<td></tr>";
echo '<tr><td colspan="9" style="color:red;font-size:30px;">Total Price: '.'$ '.$sum.'</td></tr>';
echo '</tbody></table><br/><br/><br/>';
echo "<div align='center'>";
if($sum>0)
	echo '<a href="../../../../../../../../../../CodeIgniter/index.php/Cart_controller/checkOut" data-inline="true" data-role="button">Check out</a>';
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "<a href='../../../../../../../../../../CodeIgniter/index.php/Main_page' data-inline='true' data-role='button' >See More Product</a></div>";


<ul class="well" id="product_line" style="list-style-type:none;  text-align:center; margin-right:2%;margin-left:2%" data-role="listview">
		<li id="image">
		<?php if($productImage==null) 
		echo "<img border='1px' solid #CCC src='../../../../../../../../../../CodeIgniter/image/product1.png' width='80%'>";
		else echo"<img border='1px' solid #CCC src='../../../../../../../../../../CodeIgniter/image/".$productImage."' width='80%'>";
		?></li>
        <li style="font-variant:small-caps; font-size:24px;text-align:center;" data-role="list-divider"><?php echo $productName?></li>
         <li id='space'>space</li>
		<li style="font-size:24px; color:#999"> Price: 
        <?php echo "<span style='color:#F60;'>$".$productPrice."</span><li id='space'>space</li><li id='space'>space</li>";?>
        <li><?php echo $productDescription?></li>
        <li id='space'>space</li>
        <li><a href="../../../../../../../../../../CodeIgniter/index.php/Main_page/info/<?php echo $productID ?>" class="btn btn-lg btn-info">Add to Cart</a></li>
</ul>

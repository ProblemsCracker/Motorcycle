<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>recommand</title>
</head>

<body>
<ul style="list-style-type:none; text-align:center" id="recommand1">
		<li><h2>People buy this product also LIKE: </h2></li>
         <li style="visibility:hidden">space</li>
          <li style="visibility:hidden">space</li>
		<li><?php if($productImage==null) echo "<img src='../../../../../../../../../../CodeIgniter/image/product1.png'>";else echo"<img src='../../../../../../../../../../CodeIgniter/image/".$productImage."'>";?></li>
        <li style="font-variant:small-caps; font-size:24px"><?php echo $productName?></li>
         <li style="visibility:hidden">space</li>
		<li style="; color:#999"> Price: <?php 
		if(isset($specialPrice)) 
		{echo "<span style='font-size:24px; color:#F60; text-decoration:line-through'>$".$productPrice."</span><li><span style='color:#F00;font-size:30px; font-weight:bold;'>SALE: $".$specialPrice."</span></li>";}
		else	
		{echo "<span style='color:#F60;'>$".$productPrice."</span><li style='visibility:hidden'>space</li><li style='visibility:hidden'>space</li>";}
		?></li>
        <li><?php echo $productDescription?></li>
        <li style="visibility:hidden">space</li>
        <li><a data-inline='true' data-role='button'  href="../../../../../../../../../../CodeIgniter/index.php/Main_page/info/<?php echo $productID ?>">Add to Cart</a></li>
</ul>
</body>
</html>
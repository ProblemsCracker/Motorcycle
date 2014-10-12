<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script>
var productQuantity=1;
$(document).ready(function(){
    $("#div1").fadeIn(3000);
});
$(document).ready(
function(){
   var add,reduce,num,num_txt;
   add=$(".J_jia");
   reduce=$(".J_jian");
   num="";
   num_txt=$(".num");  
   var num_val=num_txt.val("1");
   
   add.click(function(){
     num = $(".num").val();    
     num++;
	 productQuantity++;
     num_txt.val(num);
    });
 
   reduce.click(function(){
        num = $(".num").val();
     if(num >0)
	 {
      if(num==1)
      { 
	  	productQuantity=1;
       	num_txt.val("1");
      }
      else
      {
       num--;
	   productQuantity--;
       num_txt.val(num);
      }
     }
    });
});
</script>
<script>
function Confirm()
{
	window.location.href="../../Cart_controller/add/<?php echo $productID ?>/"+productQuantity+"/"+<?php if(isset($specialPrice)) echo $specialPrice;else echo $productPrice; ?>;	
}
</script>
<style type="text/css">
 .num_box{width:100%;float:left;}
 .num_box a{width:100px;text-align:center;cursor:pointer;}
 .num_box a:hover{background:#f0f0f0;}
 .num_box a:active{background:#E3E3E3;}
 .num,.num_box a{height:30px;line-height:20px;border-color:#ccc;border-style:solid;color:#333;}
 .num{border-width:1px;text-align:center;text-indent:0px;line-height:15px\9;padding:0;margin-top:10px;width:25px;}
 .J_jia{border-width:5px 5px 5px 5px;border-radius:3px 0 0 3px;}
 .J_jian{border-width:5px 5px 5px 5px;border-radius:0 3px 3px 0;}
</style>
</head>
<body>
<div style="margin-top:50px">
<ul id="product_line2"  style="list-style-type:none; text-align:center;margin-right:auto;margin-left:auto" data-role="listview">
		<li>
        <div id="div1" style="display:none; text-align:center">
		<?php
		 if($productImage==null) 
		echo "<img src='../../../../../../../../../../CodeIgniter/image/product1.png'>";
		else echo"<img src='../../../../../../../../../../CodeIgniter/image/".$productImage."'>";
		?></div>
        </li>
        <li style="text-align:center; font-variant:small-caps; font-size:24px" data-role="list-divider"><?php echo $productName?></li>
         <li style="visibility:hidden">space</li>
		<li style="font-size:24px; color:#999"> Price: 
        <?php 
		if(isset($specialPrice))
		{
			echo "<span style='color:#F60; text-decoration:line-through'>$".$productPrice."</span><li><span style='color:#F00;font-size:30px; font-weight:bold;'>SALE: $".$specialPrice."</span></li>";
		}
		else
		{
			echo "<span style='color:#F60;'>$".$productPrice."</span><li style='visibility:hidden'>space</li><li style='visibility:hidden'>space</li>";	
		}
			?>
        <li><?php echo $productDescription?></li>
        <li style="visibility:hidden">space</li> 
        <li style="font-size:20px;">Qty: 
        <li class="num_box"><button class="J_jia">&nbsp;&nbsp; + &nbsp;&nbsp;</button><label><input type="text" class="num" name="productQuantity"/></label><button class="J_jian">&nbsp;&nbsp; - &nbsp;&nbsp;</button></li>
        </li>
        <li style="visibility:hidden">space</li>
        <li style="font-size:20px;"><a href='#' onClick="Confirm()">Add to Cart</a></li>
        <li style="visibility:hidden">space</li>
        <li style="font-size:20px;"><a href="../../Main_page">Go Back</a></li>
        <li style="visibility:hidden">space</li>
        <li style="visibility:hidden">space</li>
</ul>
</div>
</body>
</html>

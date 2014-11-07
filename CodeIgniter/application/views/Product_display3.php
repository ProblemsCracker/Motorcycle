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
 .J_jia{}
 .J_jian{}
</style>
</head>
<body>
<div style="margin-top:50px">

<div class="container">
	<div class="col-sm-6">
		<div id="div1" style="display:none; text-align:center">
		<?php
		 if($productImage==null) 
		echo "<img style='width: 60%; height: 50%' 
				border='1px' solid #CCC src='../../../../../../../../../../CodeIgniter/image/product1.png'>";
		else echo"<img style='width: 60%; height: 50%'
				border='1px' solid #CCC src='../../../../../../../../../../CodeIgniter/image/".$productImage."'>";
		?></div>
	</div>
	
	<!-- display product information -->
	<div class="col-sm-3">
		
		<ul id="product_line2"  style="list-style-type:none; text-align:center;margin-right:auto;margin-left:auto" 
			data-role="listview">
		
				<li style="text-align:center; font-variant:small-caps; font-size:24px" data-role="list-divider">
					<?php echo "<span style='font-size:30pt; font-weight: bold'>".$productName."</span>" ?>
				</li>
				
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
				
				<!--<li><?php echo $productDescription?></li>-->
				<!--<li style="visibility:hidden">space</li>-->
				 
				<li style="font-size:20px;">Qty: 
					<li class="num_box">
						<button class="J_jia btn btn-default">
							&nbsp;&nbsp; + &nbsp;&nbsp;
						</button>
					
						<label>
							<input type="text" class="num" name="productQuantity"/>
						</label>
					
						<button class="J_jian btn btn-default">
							&nbsp;&nbsp; - &nbsp;&nbsp;
						</button>
					</li>
				</li>
				<li style="visibility:hidden">space</li>
				
				
				<li style="font-size:20px;">
					<button href='#' onClick="Confirm()" type="button" class="btn btn-default">
						Add to Cart
					</button>
				</li>
				<li style="visibility:hidden">space</li>
				<li style="font-size:20px;">
					<button href="../../Main_page" type="button" class="btn btn-default">
						Go Back
					</button>
				</li>
				
				
				<li style="visibility:hidden">space</li>
				<li style="visibility:hidden">space</li>
		
		</ul>
		
	</div>
	
</div>

<div>
	<div class="container">
    <div>
        <h2>My Profile</h2>
    </div>
    <hr/>
    <ul class="nav nav-tabs" role="tablist" id="myTab">
      <li role="presentation" class="active"><a href="#home" role="tab" data-toggle="tab">General Information</a></li>
      <li role="presentation"><a href="#upload" role="tab" data-toggle="tab">My Upload Videos</a></li>
      <li role="presentation"><a href="#solution" role="tab" data-toggle="tab">My Edited Videos</a></li>
      <li role="presentation"><a href="#settings" role="tab" data-toggle="tab">Settings</a></li>
    </ul>
   </div>
</div>

</body>
</html>

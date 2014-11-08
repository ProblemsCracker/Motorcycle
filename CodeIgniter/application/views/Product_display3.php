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
  .showImage{
 	border-style: solid;
 	border-color: lightblue;
    border-width: 2px;
 	width: 70%; 
 	height: 50%;
 }
</style>
</head>
<body>
<div style="margin-top:50px">

<div class="container">
		<div class="col-sm-6">
			<div id="div1" style="display:none; text-align:center">
			<?php
			 if($productImage == null) 
			echo "<img class='showImage'  
					src='../../../../../../../../../../CodeIgniter/image/product1.png'>";
			else echo"<img class='showImage'
					src='../../../../../../../../../../CodeIgniter/image/".$productImage."'>";
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
					<a href="../../Main_page" type="button" class="btn btn-default">
						Go Back
					</a>
				</li>
				<li style="visibility:hidden">space</li>
				<li style="visibility:hidden">space</li>
		
		</ul>
		
	</div>
	
</div>
<br/>
<div>
	<div class="container">
    <div>
        <h2>My Profile</h2>
    </div>
    <hr/>
    <ul class="nav nav-tabs" role="tablist" id="myTab">
      <li role="presentation" class="active"><a href="#home" role="tab" data-toggle="tab">Detail</a></li>
      <li role="presentation"><a href="#upload" role="tab" data-toggle="tab">Feedbacks</a></li>
      <li role="presentation"><a href="#solution" role="tab" data-toggle="tab">My Edited Videos</a></li>
      <li role="presentation"><a href="#settings" role="tab" data-toggle="tab">Settings</a></li>
    </ul>
   </div>
   <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="home">
      <div class="container">
      <br/>
      <table class="table">
<tr>
    	<tr class="success"><td><strong>Spec</strong><td></tr>
        <tr class="info"><td class="col-sm-2">Insurance</td><td></td></tr>
        <tr class="info"><td class="col-sm-2">Manufacturer</td><td>Honda</td></tr>
        <tr class="info"><td class="col-sm-2">Model Year</td><td>2014</td></tr>
        <tr class="info"><td class="col-sm-2">Model</td><td>TRX?400X</td></tr>
        <tr class="info"><td class="col-sm-2">MSRP</td><td> $6,399.00*</td></tr>
</tr>
<tr>
	<tr class="success"><td><strong>Dimensions</strong><td></tr>
        <tr class="info"><td class="col-sm-2">Length</td><td>71.7 in.</td></tr>
        <tr class="info"><td class="col-sm-2">Height</td><td>44 in.</td></tr>
        <tr class="info"><td class="col-sm-2">Width</td><td>408 lbs.</td></tr>
        <tr class="info"><td class="col-sm-2">Ground Clearance</td><td>4.1 in.</td></tr>
        <tr class="info"><td class="col-sm-2">Wheelbase</td><td> 47.9 in.</td></tr>
	<tr class="info"><td class="col-sm-2">Turning Radius</td><td>10.5 ft.</td></tr>
        <tr class="info"><td class="col-sm-2">Seat Height</td><td> 32.8 in.</td></tr>
</tr>

<tr>
	
    	<tr class="success"><td><strong>Engine</strong><td></tr>
        <tr class="info"><td class="col-sm-2">Engine</td><td>RFVC, dry-sump, 1-cylinder, 4-stroke</td></tr>
        <tr class="info"><td class="col-sm-2">Displacement</td><td>397 cc</td></tr>
        <tr class="info"><td class="col-sm-2">Bore x Stroke</td><td>85 x 70 mm</td></tr>
        <tr class="info"><td class="col-sm-2">Carburetion</td><td>38 mm piston-valve with accelerator pump </td></tr>
        <tr class="info"><td class="col-sm-2">Fuel Tank Capacity</td><td>2.6 gal. including 0.4 gal. reserve</td></tr>
	<tr class="info"><td class="col-sm-2">Ignition</td><td>CD with electronic advance</td></tr>
        <tr class="info"><td class="col-sm-2">Starting</td><td>Electric</td></tr>
        <tr class="info"><td class="col-sm-2">Clutch</td><td>Manual</td></tr>
	<tr class="info"><td class="col-sm-2">Cooling</td><td>Air</td></tr>

</tr>
<tr>
	<tr class="success"><td><strong>Drivetrain</strong><td></tr>
        <tr class="info"><td class="col-sm-2">Transmission</td><td>5-speed with reverse</td></tr>
        <tr class="info"><td class="col-sm-2">Drive</td><td>O-ring-sealed chain</td></tr>
       
</tr>
<tr>
	<tr class="success"><td><strong>Brakes/Wheels/Tires</strong><td></tr>
        <tr class="info"><td class="col-sm-2">Brakes</td><td>Front: Dual hydraulic 174 mm discs Rear: Single 220 mm disc</td></tr>
        <tr class="info"><td class="col-sm-2">Tires</td><td>Front: 22 x 7-10 knobby radialRear: 20 x 10-9 knobby</td></tr>
       
</tr>
<tr>
	<tr class="success"><td><strong>Operational</strong><td></tr>
        <tr class="info"><td class="col-sm-2">Suspension</td><td>Front: Independent double-wishbone with Showa shocks, 5-position spring-preload adjustability; 8.2 in. travel Rear: Pro-Link fully-adjustable single Showa shock; 9.1 in.travel</td></tr>
  
       
</tr>
<tr>
	<tr class="success"><td><strong>Other</strong><td></tr>
        <tr class="info"><td class="col-sm-2">Colors</td><td>Red</td></tr>
  
       
</tr>
</table>
</div>
      </div>
       <div role="tabpanel" class="tab-pane" id="upload">
       <link href="/CodeIgniter/css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
		<script src="/CodeIgniter/js/star-rating.js" type="text/javascript"></script>

        <div class="container">
        	<br/>
       		<div class='well'>
            	<div style="height:80px">
					<h4><span class='col-sm-2'><strong>Average Rating: </strong></span>
					<span style='position:relative; bottom:10px;' class='col-sm-6'><input class='rating-input' type='number' value='4'/></span></h4>
                    </div>
              </div>
              	<div>
                	<div class='alert alert-info'>
                    <div class="row">
                    <div class="col-sm-6">
                        <span style='position:relative; bottom:10px;'><input class='rating-input' type='number' value='4'/></span>
                        <div style="font-size:20px">By <strong>Scott:</strong></div>
                    </div>
                    <div class='col-sm-4'><i>I've tried a few and they either blow off, smash my nose flat, or fit like a brick with a bungee cord. This wrap works very well and I am going to get a couple more so I don't have to do laundry quite as often. Would I recommend it? Oh Yea, but I would also recommend flying kites in a storm so follow your heart.</i></div>
                    </div>
				</div>
			</div>
            
                 <div>
                	<div class='alert alert-success'>
                    <div class="row">
                    <div class="col-sm-6">
                        <span style='position:relative; bottom:10px;'><input class='rating-input' type='number' value='5'/></span>
                        <div style="font-size:20px">By <strong>Adam:</strong></div>
                    </div>
                    <div class='col-sm-4'><i>I got this face mask to use while riding my motorcycle in cold weather. The fabric is soft which is nice but there is a few inches of fabric above the skull print that you have to sort of fold in so it looks right on your face. It also seems to shift on your face as you move around and the fact that it doesnt go over your head means that it can start sliding down too. I tried it a few times and wasnt too happy with itso I ordered a full head mask from a different place.</i></div>
                    </div>
				</div>
			</div>
            
            <div>
                	<div class='alert alert-info'>
                    <div class="row">
                    <div class="col-sm-6">
                        <span style='position:relative; bottom:10px;'><input class='rating-input' type='number' value='3'/></span>
                        <div style="font-size:20px">By <strong>Rahul:</strong></div>
                    </div>
                    <div class='col-sm-4'><i>I was expecting something a little more well crafted. What I got was a loose stretch material that barely stays taught over my face. It is constantly moving and has to be adjusted. The skull imprint is lower than it should be and the mask needed to be adjusted to bring it to the appropriate level by folding excess material over, inside the mask. If I were to cut the material to the appropriate level, it would cause it to fray and unravel.</i></div>
                    </div>
				</div>
			</div>
            
            <div>
                	<div class='alert alert-success'>
                    <div class="row">
                    <div class="col-sm-6">
                        <span style='position:relative; bottom:10px;'><input class='rating-input' type='number' value='4'/></span>
                        <div style="font-size:20px">By <strong>Sarah:</strong></div>
                    </div>
                    <div class='col-sm-4'><i>Bought this for my  son as it states from step2 age is recommended for 2 1/2 and up, here it says 12 months and up. Anyways, it was very SMALL for him and he is not a big kid BUT he loved it and rode it back and forth, back and forth. The wheels did not hold up well at all though and is impossible for me to get replacement wheels for it. We only used this for about 2 months due to size issues. I think a 12 month old would have a tough time balancing it as it is not wide and stable like most ride ons.</i></div>
                    </div>
				</div>
			</div>
                    <script>
                jQuery(document).ready(function () {
                    $('.rating-input').rating({
                          min: 0,
                          max: 5,
                          rtl: false,
                          showCaption: true,
                          showClear: false,
                          size: 'sm',
                          hoverEnabled:false,
                       });
                });
        </script>
           </div>
       <div role="tabpanel" class="tab-pane" id="solution">
       </div>
       <div role="tabpanel" class="tab-pane" id="settings">
       </div>
	</div>
</div>
</div>
</div>
</body>
</html>

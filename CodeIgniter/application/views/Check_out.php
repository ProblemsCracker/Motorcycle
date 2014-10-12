<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>check out</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $("#form1").validate({
        rules: {
          shippingAddress: "required",// simple rule, converted to {required:true}
		  shippingZipcode: { required: true, maxlength:5,  minlength:5 },
		  cardNumber: {required: true, digits:true, maxlength:16, minlength: 16},
		  pin: "required",
          billingAddress: "required",
		  billingZipcode:  { required: true, maxlength: 5,  minlength: 5 },
        }
      });
    });
  </script>
    <style type="text/css">
    label.error { font-size:12px; color: red; display:block}
  </style>
</head>

<body>
<div class="register" style="text-align:left">
<form id="form1" name="f" method="post" action="../../../../../../../../../../CodeIgniter/index.php/Cart_controller/storeCheckOut">
<h1 align="center">Order Information</h1>
<h3>Shipping Information</h3>
  <p><span style="color:red">*</span>Shipping Address:<br/>
    <input type="text" name="shippingAddress" size="40"/>
  </p>
   <p><span style="color:red">*</span>ZIP Code:<br/>
    <input type="text" name="shippingZipcode"  size="10" maxlength="5"/>
  </p>
<h3>Billing Information</h3>
  <p><span style="color:red">*</span>Card Number:<br/><input type="text" name="cardNumber" size="40" maxlength="16"/></p>
  
  <p><span style="color:red">*</span>PIN:<br/><input type="password" name="pin" size="40"/></p>
  <p><span style="color:red">*</span>Billing Address:<br/>
    <input type="text" name="billingAddress" size="40"/>
  </p>
   <p><span style="color:red">*</span>ZIP Code:<br/>
    <input type="text" name="billingZipcode"  size="10" maxlength="5"/>
  </p>
  <?php 
  	$sum=$this->session->userdata('sum');
  	echo '<p style="font-size:20px;">Total Price:<span style="color:red">$'.$sum.'</span></p>';
  ?>
  <input type="submit" value="Submit" data-inline='true' data-role='button' >
  <input type="button" value="Back" onclick="goBack()" data-inline='true' data-role='button' >
</form>
</div>
<script>
function goBack()
{
	window.location.href="../../../../../../../../../../CodeIgniter/index.php/Cart_controller/myCart";
}
</script>
</body>
</html>
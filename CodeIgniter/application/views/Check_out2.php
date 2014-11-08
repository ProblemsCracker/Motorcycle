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
<h1 align="center">Check Out</h1>
<nav class="navbar navbar-default navbar-static-top" role="navigation">
  
   <div>
      <ul class="nav navbar-nav">
        <li><a href="#">Sign In</a></li>
         <li ><a href="../../../../../../../../../../CodeIgniter/index.php/Cart_controller/checkOut">Shipment & Delivery</a></li>
         <li class="active" ><a>Payment</a></li>
         <li><a href="#">Place Order</a></li>
      </ul>
   </div>
</nav>
<h3>Billing Information</h3>
<p><span style="color:red">*</span>First Name:<br/><input type="text" name="cardNumber" size="40" maxlength="16"/></p>
  
  <p><span style="color:red">*</span>Last Name:<br/><input type="text" name="cardNumber" size="40" maxlength="16"/></p>
  
  <p><span style="color:red">*</span>Card Number:<br/><input type="text" name="cardNumber" size="40" maxlength="16"/></p>
  
  <p><span style="color:red">*</span>Security Code:<br/><input type="password" name="pin" size="10"/></p>
  <p>
    <div class="form-group">
      <span style="color:red">*</span>Expiration Date:<br/>
      <div class="col-sm-2">
      <select class="form-control" >
         <option>1</option>
         <option>2</option>
         <option>3</option>
         <option>4</option>
         <option>5</option>
      </select>
     </div>
      <div class="col-sm-3">
      <select class="form-control" >
         <option>2014</option>
         <option>2015</option>
         <option>2016</option>
         <option>2017</option>
         <option>2018</option>
      </select>
    </div>
    <div class="col-sm-6">
    </div>

      </div>
    </p>
  <br/>
  <p><span style="color:red">*</span>Billing Address:<br/>
    <div class="radio">
   <label>
      <input type="radio" name="optionsRadios" id="optionsRadios2" 
         value="option2">
         Use Shipping Address
   </label>
</div>
<div class="radio">
   <label>
      <input type="radio" name="optionsRadios" id="optionsRadios2" 
         value="option2">
         Use a Different Address
   </label>
</div>
  </p>

   <p> <div class="checkbox">
      <label>
      <input type="checkbox"> Save this Card for Future Purchases
      </label>
   </div>
   <div class="checkbox">
      <label>
      <input type="checkbox"> Make this my Default Credit Card
      </label>
   </div>
  </p>
  
  <input type="button" class="btn btn-primary" value="Back" onclick="goBack()" data-inline='true' data-role='button' >
  <input type="submit" class="btn btn-primary" value="Next" data-inline='true' onclick="goPayment()" data-role='button' >
  
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
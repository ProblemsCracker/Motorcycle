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
          sFullName: "required",// simple rule, converted to {required:true}
          sAddressLine1: "required",
          sCity:"required",
          sState:"required",
		  sZipcode: { required: true, maxlength:5,  minlength:5 },
		  sCountry:"required",
		  optionsRadios:"required",
          
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
<form id="form1" class="form-horizontal" name="f" method="post" action="../../../../../../../../../../CodeIgniter/index.php/Cart_controller/checkout2" >
<h1 align="center">Check Out</h1>
<img src="/CodeIgniter/image/progress1.png" width="500px"/>
<h3>Shipping Information</h3>
  <p><span style="color:red">*</span>Full Name:<br/>
    <input type="text"  class="form-control" name="sFullName" size="40"/>
  </p>
    <p><span style="color:red">*</span>Address Line 1:<br/>
    <input type="text" class="form-control" name="sAddressLine1" size="40"/>
  </p>
    <p><span style="color:red"></span>Address Line 2 (Optional):<br/>
    <input type="text" class="form-control"  name="sAddressLine2" size="40"/>
  </p>
   <p><span style="color:red">*</span>City:<br/>
    <input type="text" class="form-control" name="sCity" size="40"/>
  </p>
   <p><span style="color:red">*</span>State / Province / Region:<br/>
    <input type="text" class="form-control" name="sState" size="40"/>
  </p>
   <p><span style="color:red">*</span>ZIP Code:<br/>
    <input type="text" class="form-control" name="sZipcode"  size="10" maxlength="5"/>
  </p>
  <p>
      <span style="color:red">*</span>Country:<br/>
      <select class="form-control" name="sCountry">
         <option>United States</option>
         <option>Australia</option>
         <option>Brazil</option>
         <option>China</option>
         <option>Korea</option>
      </select>
      
  </p>
  <div class="checkbox">
      <label>
      <input type="checkbox" name="setDefaultShippingAddress"> Set as my Default shipping address
      </label>
   </div>

   <h3>Delivery</h3>
<div class="radio">
   <label>
      <input type="radio" name="optionsRadios" id="optionsRadios1" 
         value="option1" checked> Standard 3 Day: FREE
   </label>
</div>
<div class="radio">
   <label>
      <input type="radio" name="optionsRadios" id="optionsRadios2" 
         value="option2">
         2 Day Shipping: $10.95
   </label>
</div>
<div class="radio">
   <label>
      <input type="radio" name="optionsRadios" id="optionsRadios2" 
         value="option3">
         1 Day Shipping: $16.95
   </label>
</div>
<p>
</p>
 <div class="col-sm-12 container">
  <div class="col-sm-6" align="center">
  <input type="button" class="btn btn-primary btn-lg" value="Back" onclick="goBack()" data-inline='true' data-role='button' >
  </div>
<div class="col-sm-6" align="center">
  <button type="submit" class="btn btn-primary btn-lg submit" data-inline='true'>Next</button>
</div>
</div>
</form>
</div>
<script>
function goPayment(){
  window.location.href="../../../../../../../../../../CodeIgniter/index.php/Cart_controller/checkout2"
}
function goBack()
{
	window.location.href="../../../../../../../../../../CodeIgniter/index.php/Cart_controller/myCart";
}
</script>
</body>
</html>
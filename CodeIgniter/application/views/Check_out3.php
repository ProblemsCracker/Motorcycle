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
<form id="form1" name="f" class="form-horizontal" method="post" action="../../../../../../../../../../CodeIgniter/index.php/Cart_controller/storeCheckOut">
<h1 align="center">Check Out</h1>

<img src="/CodeIgniter/image/progress2.png" width="500px"/>

<h3>Order Review</h3>
<div class="col-sm-12">
  <div class="col-sm-5">
<p>
  <img src="/CodeIgniter/image/slider1.png" width="120px"/>
  </p>
</div>
<div class="col-sm-7">
<p><h4>2007 Harley-Davidson Touring</h4><br/>
  Quantity: 1 <a href="#">Change</a><br/>
  Estimated Delivery: Nov.15, 2014<br/><br/>


  </p>
</div>
  </div>


<div class="container col-sm-12" >
  <div class="col-sm-6">
<p>
  Shipping Address:<br/>
  <br/>
  Amy Peng<br/>
  2627 Ellendale Place<br/>
  LOS ANGELES , CA 90007<br/>
  Phone: 2131111111<br/>
  <br/>
  <a href="#">Change</a>
</p>
</div>
<div class="col-sm-6">
<p>
  Payment Method:<br/>
  <img src="/CodeIgniter/image/visa.png" width="25px"/>ending in 8888<br/>
  <a href="#">Change</a>
  <br/>
  Billing Address:<br/>
  Same as shipping Address<br/>
  <a href="#">Change</a>
</p>
</div>
</div>

  <div class="col-sm-12">
  <table class="table ">
    <tr><th>Item(s):</th><td>1</td></tr>
      <tr> <th> Shipping and Handling:</th><td>$15.09</td><tr>
        <tr><th>Total Before Tax:</th><td>$30,015.09</td></tr>
      <tr> <th> Estimated Tax:</th><td>$2,700</td><tr>
      <tr></tr>

      <tr> <th> <h4>Total:</h4></th><td>$32,715.09</td><tr>

  </table>
</div>

  <div class="col-sm-12 container">
  <div class="col-sm-6" align="center">
  <input type="button" class="btn btn-primary btn-lg" value="Back" onclick="goBack()" data-inline='true' data-role='button' >
  </div>
<div class="col-sm-6" align="center">
  <input type="submit" class="btn btn-primary btn-lg" value="Place Order" data-inline='true' onclick="goPayment()" data-role='button' >
</div>
</div>




  </form>

</div>
<script>
function goBack()
{
  window.location.href="../../../../../../../../../../CodeIgniter/index.php/Cart_controller/checkout";
}
</script>
<div class="col-sm-12">
<div style="height:150px"></div>
<div class="container">
 <footer>
        <p class="pull-right"><a href="#"><span class="glyphicon glyphicon-chevron-up"></span> Back to top</a></p>
        <p>&copy; 2014 Motorcycle Market, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
 </footer>
</div>
</div>
</body>
</html>
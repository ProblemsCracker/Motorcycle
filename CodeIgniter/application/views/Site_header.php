<?php 
if ($this->agent->is_mobile())
echo "<link rel='stylesheet' href='http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css'>
<script src='http://code.jquery.com/jquery-1.8.3.min.js'></script>
<script src='http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js'></script>
<link href='/hw3/css/mini.css' rel='stylesheet' type='text/css' />
<script>
$(document).ready(function(){
    $('a').each(function(){
          $(this).attr('rel','external');
    });
}); 
</script>";
else
	echo "<link href='/CodeIgniter/css/default.css' rel='stylesheet' type='text/css' >";
?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	
    <title>Carousel Template for Bootstrap</title>
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../docs-assets/js/html5shiv.js"></script>
      <script src="../../docs-assets/js/respond.min.js"></script>
    <![endif]-->
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
<body>

<div data-role="page">
<div data-role="content">
<div class="topBar">
<img src="/CodeIgniter/image/brandName.png" width="70%"></img><img src="/CodeIgniter/image/feature.png" width="30%"></img>
<br/><br/>
</div>
<br/>
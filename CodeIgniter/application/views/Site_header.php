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
<img src="/CodeIgniter/image/brandName.png" width="65%" margin-left="10%"></img><img src="/CodeIgniter/image/feature.png" width="25%"></img>
<br/><br/>
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid" style="font-size:20">
<!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/CodeIgniter/index.php/Main_page">Home</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Types <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#" style="font-size:16">Sport</a></li>
            <li><a href="#" style="font-size:16">Two_seat</a></li>
            <li><a href="#" style="font-size:16">Electronic</a></li>
            <li><a href="#" style="font-size:16">Classic</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Brands <span class="caret"></span></a>
      	  <ul class="dropdown-menu" role="menu">
            <li><a href="#" style="font-size:16">BMW</a></li>
            <li><a href="#" style="font-size:16">Honda</a></li>
            <li><a href="#" style="font-size:16">Aprilia</a></li>
            <li><a href="#" style="font-size:16">Indian</a></li>
          </ul>
        </li>
	<li><a href="#">Motor Review</a></li>
	<li><a href="#">Top10</a></li>
	<li><a href="#">On Sale</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
<br/>

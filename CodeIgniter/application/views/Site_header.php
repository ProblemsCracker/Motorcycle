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
	echo "<link rel='stylesheet' type='text/css' href='../css/default.css'>";
?>
<body>
<div data-role="page">
<div data-role="content">
<div class="topBar">
<img src="/CodeIgniter/image/brandName.png" width="70%"></img><img src="/CodeIgniter/image/feature.png" width="30%"></img>
<br/><br/>
</div>
<br/>
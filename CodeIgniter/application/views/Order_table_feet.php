<?php
echo '</table></div>';
echo "<br/><div style='width:200px;margin:0 auto;'><button type='button' class='btn btn-primary' style='width:150px'onclick='goBack()'>Back</button></div><br><br><br><br><br>
<script>
function goBack()
{
	history.go(-1);	
}
</script>";

?>
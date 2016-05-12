<?php ob_start(); ?>
<? 

setcookie("uid","",time()-90000);
setcookie("umail","",time()-90000);
setcookie("upass","",time()-90000);
setcookie("uresim","",time()-90000);
setcookie("uid_2","",time()-90000);
setcookie("umail_2","",time()-90000);
setcookie("upass_2","",time()-90000);
setcookie("uresim_2","",time()-90000);
header("Location:index.php");
?>

<?php
	if(isset($db)){
		mysql_close($db);
	}
?>
<? ob_end_flush(); ?> 
<?php
$site = "http://".$_SERVER['HTTP_HOST']."/";
$url = $_POST['url'];
$urlwish = $_POST['urlwish'];
if (strlen($urlwish)==0) {
	$symbols = "QqWwEeRrTtYyUuIiOoPpAaSsDdFfGgHhJjKkLlZzXxCcVvBbNnMm1234567890"; 
	$rand = substr(str_shuffle($symbols), 0, 4); 
	echo "<a href='$site$rand' target='_blank'>$site$rand</a>";
	$fh = fopen(".htaccess", "a"); 
	fwrite($fh, "
	Redirect /$rand $url"); 
	fclose($fh); 
}
else
{
	echo "<a href='$site$urlwish' target='_blank'>$site$urlwish</a>";
	$fh = fopen(".htaccess", "a"); 
	fwrite($fh, "
	Redirect /$urlwish $url"); 
	fclose($fh); 	
}
?>
<?php

include('way2sms-api.php');
	$lat=$_POST['lat'];
	$lon=$_POST['lon'];
    $res = sendWay2SMS("USERNAME","PASSWORD","NUMBERS_COMMA_SEPERATED","!!!SOS!!! INVICTUS #E162\nHelp, I m in danger at location($lat,$lon)");
	echo $res[0]['result'] ? 'true' : 'false';
?>

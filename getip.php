<?php
	require "conn.php";
	$mysqli_qry="SELECT * FROM ip_address";
	$result=mysqli_query($conn,$mysqli_qry);
	$output=mysqli_fetch_assoc($result);
	$output=$output["ip"];
	echo $output;
	mysqli_close($conn);
?>
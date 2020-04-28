<?php
	require "conn.php";
	$mysqli_qry="SELECT * FROM location";
	$result=mysqli_query($conn,$mysqli_qry);
	$row=mysqli_fetch_assoc($result);
	$output=array(
		"lat"=>$row["lat"],
		"lon"=>$row["lon"]
	);
	echo json_encode($output);
	mysqli_close($conn);
?>
<?php
	require "conn.php";
	$lat=$_POST['lat'];
	$lon=$_POST['lon'];
	$mysqli_qry="UPDATE location SET lat='$lat',lon='$lon' WHERE id=1";
	$result=mysqli_query($conn,$mysqli_qry);
	if($result==true){
		echo "Successfull, "+$result;
	}else{
		echo "Un-successfull, "+$result;		
	}
	mysqli_close($conn);
?>
<?php
	require "conn.php";
	$ip=$_POST["ip"];
	$mysqli_qry="UPDATE ip_address SET ip='$ip' WHERE id=1";
	$result=mysqli_query($conn,$mysqli_qry);
	if($result==true){
		echo "Successfull, "+$result;
	}else{
		echo "Un-successfull, "+$result;		
	}
	mysqli_close($conn);
?>
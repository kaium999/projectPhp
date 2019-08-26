<?php

	$serverName="localhost";
	$userName="root";
	$password="";
	$dbName="portfoliodatabase";
	$conn = mysqli_connect($serverName,$userName,$password,$dbName);
	if($conn)
	{
		echo "Connection is ok";
	}
	else
	{
		echo "Connection failed";
	}
?>
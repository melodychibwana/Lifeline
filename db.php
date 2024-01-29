<?php 
	
	$serverName = "localhost";
	$userName = "root";
	$password = "";
	$dbName = "Lifeline";

	$con = mysqli_connect($serverName,$userName,$password,$dbName);
	if (!$con) {
		
		die();
	}



 ?>
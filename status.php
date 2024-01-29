<?php

	include "connection.php";

	$id= $_GET['id'];

	$sql = "UPDATE appointment_book SET status =1 WHERE id=$id";
	if (mysqli_query($con,$sql)) {
	 	
	 	header("location: listAppointments.php?success=Aproved");
	 }else{
	 	echo "Error updating status.mysli_error($con)";
	 } 

	 mysqli_close($con);

 ?>
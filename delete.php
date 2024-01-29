<?php



 include"connection.php";

    	if (isset($_GET['id'])) {
    		
    		$id =$_GET['id'];

    		$sql ="DELETE FROM `doctors` WHERE id=$id";
    		$result =mysqli_query($con,$sql);

    		if ($result) {
    			//echo "delete is succefully";
    			header("location: DoctorsList.php");
    		}else{
    			die(mysqli_error($con));
    		}
    }
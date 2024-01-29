<?php



 include"connection.php";

    	if (isset($_GET['id'])) {
    		
    		$id =$_GET['id'];

    		$sql ="DELETE FROM `appointmets` WHERE id=$id";
    		$result =mysqli_query($con,$sql);

    		if ($result) {
    			//echo "delete is succefully";
    			header("location: AllSchedule.php");
    		}else{
    			die(mysqli_error($con));
    		}
    }
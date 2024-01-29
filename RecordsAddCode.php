<?php 



	include "connection.php";

	$firstname = $_POST['firstname'];
	$date = $_POST['date'];
	$gender = $_POST['gender'];
	$department = $_POST['department'];
	$age = $_POST['age'];
	$doctor = $_POST['doctor'];
	$problems = $_POST['problems'];

		if (empty($firstname)) {
			header("location: AddRecords.php?error=firstname is required");
		}else if (empty($date)) {
			header("location: AddRecords.php?error=date is required");
		
		}else{

		$sql = "INSERT INTO `medicalrecords`(`firstname`, `date`, `gender`, `department`, `age`, `doctor`, `problems`) VALUES ('$firstname','$date','$gender','$department','$age','$doctor','$problems')";


			$result = mysqli_query($con,$sql);
			if ($result) {

				header("location: AddRecords.php?success=medical records addess successfully");	
				}else{
					header("location: AddRecords.php?error=error");
				}			

		}

		

 ?>
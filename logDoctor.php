<?php 

	include "connection.php";

	session_start();



	if (isset($_POST['firstname']) && isset($_POST['department'])) {
				
			
				$firstname = $_POST['firstname'];
				$department = $_POST['department'];

				if (empty($firstname)) {
					header("location: index.php?error=username is required");
				
				}else if (empty($department)) {
					header("location: index.php?error=department is required");
				}else{

					

					$sql = "SELECT *FROM `doctors` WHERE firstname = '$firstname' AND department ='$department'";

					$result = mysqli_query($con,$sql);

					if ($result->num_rows > 0) {

						$row = mysqli_fetch_assoc($result);
						$_SESSION['firstname'] = $row['firstname'];
						$_SESSION['department'] = $row['department'];

						header("location: Doctor.php?");


						
					}else{
						echo "<script>alert('Woops! username or Password is Wrong.')</script>";
					}

						

					}

				}




 ?>
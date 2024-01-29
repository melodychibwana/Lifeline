<?php

//connect to database
include "connection.php";

if(isset($_POST['submit'])) {

//get form values
$firstname = $_POST['firstname'];
$date = $_POST['date']; 
$start_time = $_POST['start_time'];
$end_time = $_POST['end_time']; 
$department = $_POST['department'];


//handle image upload
$image = $_FILES['image']['name'];
$temp_name = $_FILES['image']['tmp_name'];

$destination = "images/" . $image;

//insert into database
$query = "INSERT INTO `appointmets`(`firstname`, `date`, `start_time`, `end_time`, `department`, `image`) VALUES ('$firstname','$date','$start_time','$end_time','$department','$image')";



//move uploaded image
move_uploaded_file($temp_name, $destination);
//execute query
 $result= mysqli_query($con, $query); 

if ($result) {
    
    header("location: schedule.php?.php?success=Appointment scheduled successfully");
}else{

  header("location: schedule.php?error=Check your data");
  
}



}

?>

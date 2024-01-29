<?php

//connect to database
include "connection.php";

if(isset($_POST['submit'])) {

//get form values
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname']; 
$department = $_POST['department'];
$password = $_POST['password']; 


//handle image upload
// Handle image upload
$image = $_FILES['image']['name'];
$temp_name = $_FILES['image']['tmp_name'];

// Specify the destination file path
$destination = "images/" . $image;

// Insert into database
$query = "INSERT INTO `doctors`(`firstname`, `lastname`, `department`,`password`, `image`) VALUES ('$firstname','$lastname','$department','$password','$image')";

// Move uploaded image
move_uploaded_file($temp_name, $destination);

// Execute query
$result = mysqli_query($con, $query);

if ($result) {
    header("location: addDoctors.php?success=Doctor added succefully");
} else {
    header("location: addDoctors.php?error=Check your data");
}
}

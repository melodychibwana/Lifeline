<?php

//connect to database
include "connection.php";

if(isset($_POST['submit'])) {


$firstname = $_POST['firstname'];





//handle image upload
// Handle image upload
$image = $_FILES['image']['name'];
$temp_name = $_FILES['image']['tmp_name'];

// Specify the destination file path
$destination = "images/" . $image;

// Insert into database
$query = "INSERT INTO `departments`(`firstname`, `image`) VALUES ('$firstname','$image')";

// Move uploaded image
move_uploaded_file($temp_name, $destination);

// Execute query
$result = mysqli_query($con, $query);

if ($result) {
    header("location: departments.php?success=Department added succefully");
} else {
    header("location: departments.php?error=Check your data");
}
}

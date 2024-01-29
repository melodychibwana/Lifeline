<?php
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $department = $_POST['department'];

    
    $updateQuery = "UPDATE doctors SET firstname = '$firstname', lastname = '$lastname', department = '$department' WHERE id = $id";
    $updateResult = mysqli_query($con, $updateQuery);

    if ($updateResult) {
        header("Location: DoctorsList.php"); // Redirect to a success page
        exit;
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }
} else {
    echo "Invalid request method";
}
?>

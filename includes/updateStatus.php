<?php
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $appointmentId = $_GET['id'];
 
    $updateQuery = "UPDATE `appointment_book` SET `status` = '$newStatus' WHERE `id` = $appointmentId";
    $updateResult = mysqli_query($con, $updateQuery);

    if ($updateResult) {
        echo "Status updated successfully";
    } else {
        echo "Error updating status: " . mysqli_error($con);
    }
} else {
    echo "Invalid request method";
}
?>

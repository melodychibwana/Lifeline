<?php
include "connection.php";

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $userId = $_GET['id'];

    // Perform the deletion query
    $deleteSql = "DELETE FROM `users` WHERE id = $userId";
    $deleteResult = mysqli_query($con, $deleteSql);

    if ($deleteResult) {
        // Deletion successful
        echo "User deleted successfully!";
    } else {
        // Deletion failed
        echo "Error deleting user: " . mysqli_error($con);
    }
} else {
    // Invalid or missing user ID
    echo "Invalid or missing user ID";
}
?>

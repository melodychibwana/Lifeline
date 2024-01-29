<?php
include "connection.php";

// Check if the ID parameter is set
if (isset($_GET['id'])) {
    $doctorId = $_GET['id'];

    // Fetch details of the archived doctor from the database
    $sql = "SELECT * FROM `doctors` WHERE `id` = $doctorId";
    $result = mysqli_query($con, $sql);

    if ($result && $row = mysqli_fetch_assoc($result)) {
        // Display details of the archived doctor in a Bootstrap table with shadowed container
        echo '<div class="container mt-4 shadow p-3 mb-5 bg-white rounded">';
        echo '<h4 class="mb-4">Archived Doctor Details</h4>';
        echo '<table class="table table-bordered">';
        echo '<tbody>';
        echo '<tr><th>Doctor ID</th><td>' . $row['id'] . '</td></tr>';
        echo '<tr><th>Firstname</th><td>' . $row['firstname'] . '</td></tr>';
        echo '<tr><th>Lastname</th><td>' . $row['lastname'] . '</td></tr>';
        echo '<tr><th>Department</th><td>' . $row['department'] . '</td></tr>';
        // Add more details as needed
        echo '</tbody>';
        echo '</table>';
        echo '</div>';
    } else {
        echo "Doctor not found or error fetching details.";
    }
} else {
    echo "Invalid request. Doctor ID not provided.";
}
?>

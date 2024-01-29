<?php

include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname = $_POST["firstname"];
    $department = $_POST["department"];
    $time = $_POST["time"];
    $date = $_POST["date"];
    $description = $_POST["description"];

    
    if (empty($firstname) || empty($department) || empty($time) || empty($date) || empty($description)) {
        echo "Please fill in all the fields.";
    }else{


    
        $stmt = $con->prepare("INSERT INTO appointment_book (firstname, department, time, date, description) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $firstname, $department, $time, $date, $description);

 
        if ($stmt->execute()) {
            echo "<script>alert('Booked successfully'); window.location='bookFormPage.php';</script>";
    
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close statement and connection
        $stmt->close();
        $con->close();
    }
}
?>
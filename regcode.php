<?php
include "connection.php";

function hashPassword($password) {
    return password_hash($password, PASSWORD_DEFAULT);
}


if (isset($_POST['submit'])) {
   
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

   
    $hashedPassword = hashPassword($password);

   
    $sql = "INSERT INTO users (firstname, lastname, email, phone, password) VALUES (?, ?, ?, ?, ?)";


    $stmt = $con->prepare($sql);

    $stmt->bind_param("sssss", $firstname, $lastname, $email, $phone, $hashedPassword);


    if ($stmt->execute()) {
       
       header("location: signup.php?success=SignUp suceessfully");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>

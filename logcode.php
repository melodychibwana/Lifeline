<?php 

	include "connection.php";
session_start();

if (isset($_POST['firstname']) && isset($_POST['password'])) {
    $firstname = $_POST['firstname'];
    $password = $_POST['password'];

    if (empty($firstname)) {
        header("location: index.php?error=username is required");
    } else if (empty($password)) {
        header("location: index.php?error=password is required");
    } else {
        $sql = "SELECT * FROM `users` WHERE firstname = '$firstname'";
        $result = mysqli_query($con, $sql);

        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $hashedPassword = $row['password'];

            if (password_verify($password, $hashedPassword)) {
                $_SESSION['firstname'] = $row['firstname'];
                $_SESSION['role'] = $row['role'];

                if ($_SESSION['role'] == "admin") {
                    $_SESSION['allow'] = "yes";
                    header("location:admin.php");
                } else {
                    
                    header("location:dashboard.php");
                }
            } else {
                
             header("location:index.php?error=password is wrong");
            }
        } else {
                
               header("location:index.php?error=User Not found");
        }
    }
}
// login.php
<?php
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $sql = "UPDATE `users` SET `firstname`='$firstname',`lastname`='$lastname',`email`='$email',`phone`='$phone' WHERE id='$id'";

        $result = mysqli_query($con, $sql);

        if ($result) {
            
            header("location: viewPatients.php?");
        } else {
            echo "Error updating record: " . mysqli_error($con);
        }
    } else {
          header("location: viewPatients.php?Error=error");
    }
} else {
    echo "Invalid request.";
}
?>


<!-- Add jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<?php
if (isset($_GET['success'])) {
?>
    <div class="alert alert-icon alert-inverse-primary" role="alert">
        <?php echo $_GET['success']; ?>
    </div>
<?php
}
?>

<div class="row">
    <div class="col-md-12">
        <div class="card card-statistics">
            <div class="card-header">
                <div class="card-heading">
                    <h4 class="card-title-primary">View Medical Records</h4>
                </div>
            </div>
            <div class="card-body">
                <table id="export-table" class="table table-bordered">
                    <thead class="thead-light">
                        <?php
                        include "connection.php";

                        // Assuming you have a user department stored in the session
                        $userDepartment = isset($_SESSION['department']) ? $_SESSION['department'] : null;

                        if ($userDepartment) {
                            $sql = "SELECT * FROM `medicalrecords` WHERE `department` = '$userDepartment'";
                            $result = mysqli_query($con, $sql);
                            $count = 0;

                            while ($row = mysqli_fetch_assoc($result)) {
                                $count += 1;
                        ?>
                                <tbody style="color:black;">
                                    <tr>
                                        <th scope="row"><?php echo $count; ?></th>
                                        <td>Firstname:</td>
                                        <td><?php echo $row['firstname'] ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>Date:</td>
                                        <td><?php echo $row['date'] ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>Gender:</td>
                                        <td><?php echo $row['gender'] ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>Department:</td>
                                        <td><?php echo $row['department'] ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>Birth Date:</td>
                                        <td><?php echo $row['age'] ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>Doctor:</td>
                                        <td><?php echo $row['doctor'] ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>Medical Problems:</td>
                                        <td><?php echo $row['problems'] ?></td>
                                    </tr>
                                    <td><button class="btn btn-success dashicons dashicons-welcome-view-site"></button></td>
                                </tbody>
                        <?php
                            }
                        } else {
                            echo "User department not found in the session.";
                        }
                        ?>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

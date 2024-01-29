<!-- Add jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<?php


if (isset($_GET['success'])) {
    ?>
    <div class="alert alert-icon alert-inverse-primary" role="alert">
        <?php echo $_GET['success']; ?>
    </div>
<?php } ?>

<div class="row">
    <div class="col-lg-12">
        <div class="card card-statistics">
            <div class="card-body">
                <div class="export-table-wrapper table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th>N.0</th>
                                <th>FirstName</th>
                                <th>Department</th>
                                <th>Time</th>
                                <th>Date</th>
                                <th>Reason Of Appointment</th>
                                <th>Status</th>
                           
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include "connection.php";

                            // Assuming you have a user department stored in the session
                            $userDepartment = isset($_SESSION['department']) ? $_SESSION['department'] : null;

                            if ($userDepartment) {
                                // Fetch appointments for the user's department
                                $sql = "SELECT * FROM `appointment_book` WHERE `department` = '$userDepartment'";
                                $result = mysqli_query($con, $sql);

                                $count = 0;
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $count += 1;
                                    ?>
                                    <tr>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo $row['firstname']; ?></td>
                                        <td><?php echo $row['department'] ?></td>
                                        <td><?php echo $row['date']; ?></td>
                                        <td><?php echo $row['time']; ?></td>
                                        <td><?php echo $row['description']; ?></td>

                                        <td>
                                            <button type="button" class="btn btn-success" onclick="location.href='status.php?id=<?php echo $row["id"]; ?>'">Approve</button>
                                        </td>

                                    
                                    </tr>
                                <?php
                                }
                            } else {
                                echo "User department not found in the session.";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

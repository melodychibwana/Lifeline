<?php
include "connection.php";

// Check if the form is submitted and if the ID parameter is set
if (isset($_GET['id'])) {
    $doctorId = $_GET['id'];

    // Update the database to block the user
    $updateSql = "UPDATE `doctors` SET `is_blocked` = 1 WHERE `id` = $doctorId";
    if (mysqli_query($con, $updateSql)) {
        // Success message, you can redirect or display a message here
        echo "Doctor archived successfully!";
    } else {
        // Error message
        echo "Error archiving doctor: " . mysqli_error($con);
    }
}

// Fetch doctors from the database
$sql = "SELECT * FROM `doctors`";
$result = mysqli_query($con, $sql);
$count = 0;
?>

<div class="row">
    <div class="col-md-12">
        <div class="card card-statistics">
            <div class="card-header">
                <div class="card-heading">
                    <h4 class="card-title-primary">List Of Doctors</h4>
                </div>
            </div>
            <div class="card-body">
                <table id="export-table" class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>N.0</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Department</th>
                            <th>Update</th>
                            <th>Archive</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                            <tr>
                                <th><?php echo ++$count; ?></th>
                                <th><?php echo $row['firstname'] ?></th>
                                <th><?php echo $row['lastname'] ?></th>
                                <th><?php echo $row['department'] ?></th>
                                <td>
                                    <button type="button" class="fa fa-pencil btn btn-primary" onclick="location.href='DoctorUpdate.php?id=<?php echo $row["id"]; ?>'"></button>
                                </td>
                                <td>
                                    <button type="button" onclick="archiveDoctor(<?php echo $row['id']; ?>)" class="btn btn-danger">Archive</button>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    function archiveDoctor(doctorId) {
        if (confirm("Are you sure you want to archive this doctor?")) {
            // Redirect to the archive page with the doctor ID
            window.location.href = 'achive.php?id=' + doctorId;
        }
    }
</script>

<div class="row">
    <div class="col-xxl-6 m-b-30">
        <div class="card card-statistics h-100 mb-0">
            <div class="card-header d-flex align-items-center justify-content-between">
                <div class="card-heading">
                    <h4 class="card-title">Appointment Progress</h4>
                </div>
                <div class="dropdown">
                    <a class="p-2 export-btn" href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Export
                    </a>
                    <div class="dropdown-menu custom-dropdown dropdown-menu-right p-4">
                        <h6 class="mb-1">Action</h6>
                        <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-pdf-o pr-2"></i>Export to PDF</a>
                        <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-excel-o pr-2"></i>Export to CSV</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="latestjobs" class="table table-borderless table-striped jobportal-table mb-0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Firstname</th>
                                <th>Department</th>
                                <th>Time</th>
                                <th>Date</th>
                                <th>Reason Of Appointments</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody class="text-muted">
                            <?php
                            include "connection.php";
                            
                            if (isset($_SESSION['firstname'])) {
                                $logged_in_firstname = $_SESSION['firstname'];

                                $sql = "SELECT * FROM `appointment_book` WHERE firstname = '$logged_in_firstname'";
                                $result = mysqli_query($con, $sql);
                                $count = 0;

                                while ($row = mysqli_fetch_assoc($result)) {
                                    $count += 1;
                            ?>
                                    <tr>
                                        <td><?php echo $count; ?></td>
                                        <td>
                                            <p><?php echo $row['firstname'] ?></p>
                                        </td>
                                        <td><?php echo $row['department']; ?></td>
                                        <td><?php echo $row['time']; ?></td>
                                        <td><?php echo $row['date']; ?></td>
                                        <td>
                                            <?php echo $row['description']; ?>
                                        </td>
                                        <td>
                                            <?php
                                            // Check the value of 'status' and print "Approved" or "Pending"
                                            if ($row['status'] == 1) {
                                                echo '<label class="badge badge-success mb-0">Approved</label>';
                                            } else {
                                                echo '<label class="badge badge-primary-inverse mb-0">Pending</label>';
                                            }
                                            ?>
                                        </td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo "User firstname not set in session.";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

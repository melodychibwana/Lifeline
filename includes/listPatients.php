<!-- Include SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
    function deleteAndAlert(userId) {
        
        fetch('deletecode.php?id=' + userId)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.text();
            })
            .then(data => {
                
                Swal.fire('User deleted successfully!', '', 'success')
                    .then(() => {
                    
                        window.location.href = 'deletecode.php';
                    });
                
            })
            .catch(error => {
                console.error('There was a problem with the fetch operation:', error);
            });
    }
</script>



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
                        <tr>
                            <th>N.0</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>PhoneNumber</th>
                            <th>Update</th>
                           
                        </tr>
                    </thead>
                    <?php 
                        include "connection.php";
                        $sql = "SELECT * FROM `users`";
                        $result = mysqli_query($con, $sql);
                        $count = 0;
                        while ($row = mysqli_fetch_assoc($result)) {
                            $count += 1;
                    ?>
                    <tbody>
                        <tr>
                            <th><?php echo $count; ?></th>
                            <th><?php echo $row['firstname'] ?></th>
                            <th><?php echo $row['lastname'] ?></th>
                            <th><?php echo $row['email'] ?></th>
                            <th><?php echo $row['phone'] ?></th>
                            <td>
                                <button type="button" class="fa fa-pencil btn btn-primary" onclick="location.href='UpdatePage.php?id=<?php echo $row["id"]; ?>'"></button>
                            </td>
                          
                        </tr>
                        <tr>
                            <?php 
                        }
                     ?>
                </div>
            </div>
        </div>
    </div>
</div>

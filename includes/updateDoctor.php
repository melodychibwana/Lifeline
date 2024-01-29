 
<?php  
include "connection.php";


if(isset($_POST['update'])) {


  $id = $_POST['id'];

  header("Location: UpdateForm.php?id=$id");
  exit;

}


$id = $_GET['id'];


$query = "SELECT * FROM doctors WHERE id = $id"; 
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);


?>


  <div class="row">
                            <div class="col-md-12">
                                <div class="card card-statistics">
                                    <div class="card-header">
                                        <div class="card-heading">
                                            <h4 class="card-title" style="color:purple;";>List of Doctors</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form method="post" action="DocUpCode.php">
                                            
                                          <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                        <input type="text" name="firstname" class="form-control" placeholder="Firstame" value="<?php echo $row['firstname']; ?>">
                                        <br>
                                         <input type="text" name="lastname"  class="form-control" placeholder="Lastname" value="<?php echo $row['lastname']; ?>">
                                            <br>
                                         
                                         
                                          <input type="text" name="department" class="form-control" placeholder="Department" value="<?php echo $row['department']; ?>">
                                          <br>
                                                     <div class="input-group mb-3">
                                            
                                            </div>
                                             <div class="">
                                                <button type="submit" name="submit" class="btn btn-primary">Update</button>
                                                
                                            </div>
                                       

                                    </div>
                                    
                                           
                                        </form>
                                           
                                </div>
                            </div>

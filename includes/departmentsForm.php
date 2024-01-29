  <div class="row">
                            <div class="col-md-12">
                                <div class="card card-statistics">
                                    <div class="card-header">
                                        <div class="card-heading">
                                            <h4 class="card-title">Add Departments</h4>
                                        </div>
                                    </div>
                                             <?php if(isset($_GET['error'])){ ?>
                                    <div class="alert alert-icon alert-inverse-primary" role="alert">
                                        
                                        <?php echo $_GET['error']; ?>
                                    </div>
                                    
                                        <?php } ?>

                                        
                                          <?php if(isset($_GET['success'])){ ?>
                                    <div class="alert alert-icon alert-inverse-primary" role="alert">
                                        
                                        <?php echo $_GET['success']; ?>
                                    </div>
                                    
                                        <?php } ?>
                                    <form method="post" action="DepartmentCode.php">
                                        
                                    
                                    <div class="card-body">
                                             <select class="form-control" type="text"  name="firstname">
                                                <option>Maso</option>
                                              <option>SKIN</option>
                                              <option>Surgery</option> 
                                              <option>Cancer</option>
                                              <option>Cardiology Department:</option>
                                              <option>Orthopedics Department:</option>
                                              <option>Obstetrics and Gynecology Department:</option>
                                            </select>
                                            <br>
                                                <label>Image Here</label>
                                              <input type="file" class="form-control-file" id="image" name="image">
                                            <br>
                                       

                                            <div class="">
                                                <button type="submit" name="submit" class="btn btn-primary">Create Department</button>
                                                
                                            </div>

                                    </div>
                                    
                                           
                                </div>
                            </div>
</form>
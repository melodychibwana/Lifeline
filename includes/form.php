  <div class="row">
                            <div class="col-md-12">
                                <div class="card card-statistics">
                                    <div class="card-header">
                                        <div class="card-heading">
                                            <h4 class="card-title">Add Doctor</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                       <h2>Add Doctor</h2>
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


<form action="addDoctor.php" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="firstname">First Name:</label>
    <input type="text" class="form-control" id="firstname" name="firstname">
  </div>

  <div class="form-group">
    <label for="lastname">Last Name:</label> 
    <input type="text" class="form-control" id="lastname" name="lastname">
  </div>

  <div class="form-group">
    <label for="department">Department:</label>
    <select class="form-control" id="department" name="department">
      <option>Maso</option>
      <option>Skin</option>
      <option>Surgery</option> 
      <option>Cancer</option>
    </select>
  </div>
    <div class="form-group">
    <label for="password">Password</label> 
    <input type="text" class="form-control" id="lastname" name="password">
  </div>

  <div class="form-group">
    <label for="image">Image:</label>
    <input type="file" class="form-control-file" id="image" name="image">
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>

</form>
                                           
                                </div>
                            </div>

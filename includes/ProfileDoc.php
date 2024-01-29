  <div class="row">
                            <div class="col-md-12" style="width: 18rem;" >
                                <div class="card card-statistics">
                                    <div class="card-header">
                                        <div class="card-heading">
                                            <h4 class="card-title">Profile</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                   
                                    

<form action="addDoctor.php" method="post" enctype="multipart/form-data">

    <img src="prof.jpg" class="card-img-top rounded-circle" alt="Profile Picture" style="width: 100px; height: 100px; ">
    <div class="card-body">
      <h5 class="card-title">
        <input type="text" class="form-control" value="John Doe" placeholder="First Name Last Name">
      </h5>

  <div class="form-group">
    <label for="firstname">First Name:</label>
    <input type="text" class="form-control" id="firstname" name="firstname">
  </div>

  <div class="form-group">
    <label for="department">Department:</label>
    <select class="form-control" id="department" name="department">
      <option>Maso</option>
      <option>SKIN</option>
      <option>Surgery</option> 
      <option>Cancer</option>
    </select>
  <div class="form-group">
    <label for="image">Image:</label>
    <input type="file" class="form-control-file" id="image" name="image">
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Update Profile</button>

</form>
                                           
                                </div>
                            </div>

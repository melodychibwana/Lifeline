<div class="row">
    <div class="col-md-12">
        <div class="card card-statistics">
            <div class="card-header">
                <div class="card-heading">
                    <h4 class="card-title">Add Medical Records</h4>
                </div>

                <?php if(isset($_GET['error'])){ ?>
                    <div class="alert alert-icon alert-inverse-danger" role="alert">
                        <?php echo $_GET['error']; ?>
                    </div>
                <?php } ?>

                <?php if(isset($_GET['success'])){ ?>
                    <div class="alert alert-icon alert-inverse-primary" role="alert">
                        <?php echo $_GET['success']; ?>
                    </div>
                <?php } ?>

            </div>
            <div class="card-body">
                <form method="post" action="RecordsAddCode.php">

                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="firstname" class="form-control" placeholder="Firstname">
                            <br>
                            <input type="text" name="gender" class="form-control" placeholder="Gender">
                            <br>
                            <input type="text" name="age" class="form-control" placeholder="Birth Date">
                            <br>
                            
                            <textarea type="text" name="problems" class="form-control" placeholder="Add Medical Problems Here">Medical Problems</textarea>
                        </div>
                        <div class="col-md-6">
                            <input class="form-control" type="date" name="date">
                            <br>
                            <input type="text" name="department" class="form-control" placeholder="Department">
                            <br>
                            <input type="text" name="doctor" class="form-control" placeholder="Doctors Name">
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" name="submit" class="btn btn-primary">Add Records</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

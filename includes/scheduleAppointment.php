<div class="row">
    <div class="col-md-12">
        <div class="card card-statistics">
            <div class="card-header">
                <div class="card-heading">
                    <h4 class="card-title">Schedule Appointments</h4>
                    <?php if(isset($_GET['success'])){ ?>
                        <div class="alert alert-icon alert-inverse-primary" role="alert">
                            <?php echo $_GET['success']; ?>
                        </div>
                    <?php } ?>

                    <?php if(isset($_GET['success'])){ ?>
                        <div class="alert alert-icon alert-inverse-primary" role="alert">
                            <?php echo $_GET['success']; ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="card-body">
                <form action="ScheduleCode.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstname">Doctor Name:</label>
                                <input type="text" class="form-control" id="firstname" name="firstname">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lastname">Date:</label>
                                <input type="date" class="form-control" id="date" name="date">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lastname">Start Time</label>
                                <input type="time" class="form-control" id="start_time" name="start_time">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lastname">End Time</label>
                                <input type="time" class="form-control" id="end_time" name="end_time">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="department">Department:</label>
                                <select class="form-control" id="department" name="department">
                                    <option>Maso</option>
                                    <option>SKIN</option>
                                    <option>Surgery</option>
                                    <option>Cancer</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Doctor Image:</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                            </div>
                        </div>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Set Appointment</button>
                </form>
            </div>
        </div>
    </div>
</div>

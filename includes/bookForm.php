<div class="row">
    <div class="col-md-12">
        <div class="card card-statistics">
            <div class="card-header">
                <div class="card-heading">
                    <h4 class="card-title">Book An Appointment</h4>
                </div>
            </div>
            <form method="post" action="bookCode.php">
                
       
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="firstname" placeholder="First Name">
                    </div>
                    <div class="col-md-6">
                           <select class="form-control" type="department"  name="department">
                          <option>Maso</option>
                          <option>SKIN</option>
                          <option>Surgery</option> 
                          <option>Cancer</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <input type="time" name="time" class="form-control" placeholder="Time">
                    </div>
                    <div class="col-md-6">
                        <input type="date" name="date" class="form-control" placeholder="Date">
                    </div>
                </div>
                <br>


                <div class="row">
                    <div class="col-md-12">
                        <textarea type="text" name="description" class="form-control" placeholder="Reason for Appointment"></textarea>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Book Now!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
     </form>

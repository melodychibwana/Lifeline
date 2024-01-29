
     <?php 
                                                    include"connection.php";

                                            $sql ="SELECT *FROM `appointmets`";
                                            $result =mysqli_query($con,$sql);
                                            $count=0;
                                                while ($row=mysqli_fetch_assoc($result)) {

                                                  $count+=1;
                                                    
                                                    ?>





    <div class="row media-contant">
                            <div class="col-12 col-lg-6">
                                <div class="card card-statistics media-contant">
                                    <div class="card-header">
                                        <div class="card-heading">
                                        <h4 class="mt-0"><p>Doctor</p><?php echo $row['firstname']  ?></h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
    <div class="media">
        <img class="mr-3 mb-3 mb-xxs-0 img-fluid" src="images/<?php echo $row["image"]; ?>" width="250" height="250">
        <div class="media-body">
            <p>
                <h5>Date <i class="fa fa-calendar-o"></i></h5>
                <?php echo $row['date']; ?>
            </p>
            <p>
                <h5>Start Time <i class="fa fa-clock-o"></i></h5>
                <?php echo $row['start_time']; ?>
            </p>
            <p>
                <h5>End Time <i class="fa fa-clock-o"></i></h5>
                <?php echo $row['end_time']; ?>
            </p>
            <p>
                <h5>Department <i class="fa fa-building-o"></i></h5>
                <?php echo $row['department']; ?>
            </p>
            
                <button type="button" class="btn btn-success" onclick="location.href='DeleteAppointment.php?id=<?php echo $row["id"]; ?>'">UPDATE</button>
           
        </div>
    </div>
</div>

                                    </div>
                                </div>
                            </div>

                          


                                                    <?php 




                                                     
                                                }

                                         ?>
                          
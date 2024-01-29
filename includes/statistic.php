<?php
include "connection.php";

// count users
$sqlPatients = "SELECT COUNT(*) AS totalPatients FROM users";
$resultPatients = mysqli_query($con, $sqlPatients);
$rowPatients = mysqli_fetch_assoc($resultPatients);
$totalPatients = $rowPatients['totalPatients'];

// Count doctors
$sqlDoctors = "SELECT COUNT(*) AS totalDoctors FROM doctors";
$resultDoctors = mysqli_query($con, $sqlDoctors);
$rowDoctors = mysqli_fetch_assoc($resultDoctors);
$totalDoctors = $rowDoctors['totalDoctors'];
//count appointments

$sqlAppointment_book = "SELECT COUNT(*) AS totalAppointment_book FROM appointment_book";
$resultAppointment_book = mysqli_query($con, $sqlAppointment_book);
$rowAppointment_book = mysqli_fetch_assoc($resultAppointment_book);
$totalAppointment_book = $rowAppointment_book['totalAppointment_book'];

?>


  <div class="row">
                            <div class="col-md-12">
                                <div class="alert border-0 alert-primary bg-gradient m-b-30 alert-dismissible fade show border-radius-none" role="alert">
                                    <strong>welcome back admin!</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="ti ti-close"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        <!-- begin row -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card card-statistics">
                                    <div class="row no-gutters">
                                        <div class="col-xxl-3 col-lg-6">
                                            <div class="p-20 border-lg-right border-bottom border-xxl-bottom-0">
                                                <div class="d-flex m-b-10">
                                                    <p class="mb-0 font-regular text-muted font-weight-bold">Booked Appointments</p>
                                                    <a class="mb-0 ml-auto font-weight-bold" href="#"><i class="ti ti-more-alt"></i> </a>
                                                </div>
                                                <div class="d-block d-sm-flex h-100 align-items-center">
                                                    <div class="apexchart-wrapper">
                                                       
                                                    </div>
                                                    <div class="statistics mt-3 mt-sm-0 ml-sm-auto text-center text-sm-right">
                                                        <h3 class="mb-0"><i class="icon-arrow-up-circle"></i><?php echo $totalAppointment_book; ?></h3>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-lg-6">
                                            <div class="p-20 border-xxl-right border-bottom border-xxl-bottom-0">
                                                <div class="d-flex m-b-10">
                                                    <p class="mb-0 font-regular text-muted font-weight-bold">Total Patients</p>
                                                    <a class="mb-0 ml-auto font-weight-bold" href="#"><i class="ti ti-more-alt"></i> </a>
                                                </div>
                                                <div class="d-block d-sm-flex h-100 align-items-center">
                                                    <div class="apexchart-wrapper">
                                                  
                                                    </div>
                                                    <div class="statistics mt-3 mt-sm-0 ml-sm-auto text-center text-sm-right">
                                                        <h3 class="mb-0"><i class="icon-arrow-up-circle"></i><?php echo $totalPatients; ?></h3>
                                                   
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-lg-6">
                                            <div class="p-20 border-lg-right border-bottom border-lg-bottom-0">
                                                <div class="d-flex m-b-10">
                                                    <p class="mb-0 font-regular text-muted font-weight-bold">Doctors</p>
                                                    <a class="mb-0 ml-auto font-weight-bold" href="#"><i class="ti ti-more-alt"></i> </a>
                                                </div>
                                                <div class="d-block d-sm-flex h-100 align-items-center">
                                                    <div class="apexchart-wrapper">
                                                        
                                                    </div>
                                                    <div class="statistics mt-3 mt-sm-0 ml-sm-auto text-center text-sm-right">
                                                        <h3 class="mb-0"><i class="icon-arrow-up-circle"></i><?php echo $totalDoctors; ?></h3>
                                                        <p>.......</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                                    <div class="statistics ml-sm-auto mt-4 mt-sm-0 pr-sm-5">
                                                        <ul class="list-style-none p-0">
                                                            <li class="d-flex py-1">
                                                                <span><i class="fa fa-circle text-primary pr-2"></i>Patients</span> <span class="pl-2 font-weight-bold"><?php echo $totalPatients; ?></span></li>
                                                            <li class="d-flex py-1"><span><i class="fa fa-circle text-warning pr-2"></i>Doctor</span> <span class="pl-2 font-weight-bold"><?php echo $totalDoctors; ?></span></li>
                                                            <li class="d-flex py-1"><span><i class="fa fa-circle text-info pr-2"></i>Appointments</span> <span class="pl-2 font-weight-bold"><?php echo $totalAppointment_book; ?></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
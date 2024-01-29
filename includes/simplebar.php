<?php
include "connection.php";

// Count users
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

//medical records

$sqlMedicalrecords= "SELECT COUNT(*) AS totalMedicalrecords FROM medicalrecords";
$resultMedicalrecords = mysqli_query($con, $sqlMedicalrecords);
$rowMedicalrecords = mysqli_fetch_assoc($resultMedicalrecords);
$totalMedicalrecords = $rowMedicalrecords['totalMedicalrecords'];

?>

<div class="row">
    <div class="col-xs-6 col-xxl-3 m-b-30">
        <div class="card card-statistics h-100 m-b-0 bg-pink">
            <div class="card-body">
                <h2 class="text-white mb-0"><?php echo $totalAppointment_book; ?></h2>
                <p class="text-white">Appointments</p>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-xxl-3 m-b-30">
        <div class="card card-statistics h-100 m-b-0 bg-primary">
            <div class="card-body">
                <h2 class="text-white mb-0"><?php echo $totalPatients; ?></h2>
                <p class="text-white">Patients</p>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-xxl-3 m-b-30">
        <div class="card card-statistics h-100 m-b-0 bg-orange">
            <div class="card-body">
                <h2 class="text-white mb-0"><?php echo $totalDoctors; ?></h2>
                <p class="text-white">Doctors</p>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-xxl-3 m-b-30">
        <div class="card card-statistics h-100 m-b-0 bg-info">
            <div class="card-body">
                <h2 class="text-white mb-0"><?php echo $totalMedicalrecords;  ?></h2>
                <p class="text-white">Medical Records</p>
            </div>
        </div>
    </div>
</div>

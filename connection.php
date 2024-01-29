<?php 
$serverName  = "localhost";
$userName = "root";
$password = "";
$dbName = "dpp";

$con = mysqli_connect($serverName,$userName,$password,$dbName);
if(!$con){
   die();

}



?>
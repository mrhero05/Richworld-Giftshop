<?php
include "dbc.inc.php";
session_start();
$id = $_POST["id"];
$admin = $_SESSION["userId"];
$status = "Reviewing Resume";
$count = 1;


$fulldate = date('m/d/Y');
$currentDateTime = date('m/d/Y H:i:s');
$time = date('h:i A', strtotime($currentDateTime));
$sqllog = "INSERT INTO activitylog (admin_id,log_date,log_time,log_desc) values ('$admin','$fulldate','$time','Download/Review resume')";
mysqli_query($conn,$sqllog);

$sql1 = "UPDATE applyjob set apply_status='$status',submit_resume='$count' where account_id = '$id'";
mysqli_query($conn,$sql1);
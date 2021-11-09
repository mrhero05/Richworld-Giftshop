<?php
include "dbc.inc.php";
session_start();
$id = $_POST["id"];
$admin = $_SESSION["userId"];
$status = "Initial Interview";
$count = 1;

$type = "initial";
$sql = "INSERT INTO interview (acc_id,admin_id,type_interview) values ('$id','$admin','$type')";
mysqli_query($conn,$sql);


$sql1 = "UPDATE applyjob set apply_status='$status',make_interview='$count' where account_id = '$id'";
mysqli_query($conn,$sql1);

$fulldate = date('m/d/Y');
$currentDateTime = date('m/d/Y H:i:s');
$time = date('h:i A', strtotime($currentDateTime));
$sqllog = "INSERT INTO activitylog (admin_id,log_date,log_time,log_desc) values ('$admin','$fulldate','$time','Schedule user to initial interview')";
mysqli_query($conn,$sqllog);
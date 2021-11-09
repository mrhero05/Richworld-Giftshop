<?php
include "dbc.inc.php";
session_start();
$id = $_POST["id"];
$admin = $_SESSION["userId"];
$status = "Final Interview";
$count = 1;

$type = "final";
$sql = "UPDATE interview set type_interview = '$type' where acc_id = '$id'";
mysqli_query($conn,$sql);

$sql1 = "UPDATE applyjob set apply_status='$status',written_exam='$count' where account_id = '$id'";
mysqli_query($conn,$sql1);

$fulldate = date('m/d/Y');
$currentDateTime = date('m/d/Y H:i:s');
$time = date('h:i A', strtotime($currentDateTime));
$sqllog = "INSERT INTO activitylog (admin_id,log_date,log_time,log_desc) values ('$admin','$fulldate','$time','Schedule user to final interview')";
mysqli_query($conn,$sqllog);
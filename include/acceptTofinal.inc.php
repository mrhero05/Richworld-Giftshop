<?php
include "dbc.inc.php";
session_start();
$id = $_POST["initid"];
$admin = $_SESSION["userId"];
$status = "Written Passed/Scheduling Final Interview";
$count = 1;

$sql = "INSERT INTO final_interview (acc_id,admin_id) values ('$id','$admin')";
mysqli_query($conn,$sql);

$sql1 = "UPDATE applyjob set apply_status='$status',written_exam='$count',make_final='$count' where account_id = '$id'";
mysqli_query($conn,$sql1);

header("location:../depmanager.php?success");
exit();

$fulldate = date('m/d/Y');
$currentDateTime = date('m/d/Y H:i:s');
$time = date('h:i A', strtotime($currentDateTime));
$sqllog = "INSERT INTO activitylog (admin_id,log_date,log_time,log_desc) values ('$admin','$fulldate','$time','Accept user to final interview')";
mysqli_query($conn,$sqllog);
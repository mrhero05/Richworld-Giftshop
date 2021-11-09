<?php
include "dbc.inc.php";
session_start();
$id = $_POST["initid"];
$admin = $_SESSION["userId"];
$status = "Interview Passed/Scheduling Written Exam";
$count = 1;

$sql = "INSERT INTO written_exam (acc_id,admin_id) values ('$id','$admin')";
mysqli_query($conn,$sql);

$sql1 = "UPDATE applyjob set apply_status='$status',make_written='$count',initial_interview='$count' where account_id = '$id'";
mysqli_query($conn,$sql1);

header("location:../hrmanager.php?success");
exit();

$fulldate = date('m/d/Y');
$currentDateTime = date('m/d/Y H:i:s');
$time = date('h:i A', strtotime($currentDateTime));
$sqllog = "INSERT INTO activitylog (admin_id,log_date,log_time,log_desc) values ('$admin','$fulldate','$time','Accept user to written interview')";
mysqli_query($conn,$sqllog);
<?php
include "dbc.inc.php";
session_start();
$id = $_POST["id"];
$admin = $_SESSION["userId"];
$status = "Deployment";
$count = 1;

$sql = "INSERT INTO deployment (acc_id,admin_id) values ('$id','$admin')";
mysqli_query($conn,$sql);


$sql1 = "UPDATE applyjob set apply_status='$status',contract_sign='$count' where account_id = '$id'";
mysqli_query($conn,$sql1);

$fulldate = date('m/d/Y');
$currentDateTime = date('m/d/Y H:i:s');
$time = date('h:i A', strtotime($currentDateTime));
$sqllog = "INSERT INTO activitylog (admin_id,log_date,log_time,log_desc) values ('$admin','$fulldate','$time','User add to deployment')";
mysqli_query($conn,$sqllog);
<?php
include "dbc.inc.php";
session_start();
$jobid = $_POST["jobid"];
$id = $_POST["id"];
$admin = $_SESSION["userId"];
$status = "Scheduling Initial Interview";
$count = 1;

$sql2 = "DELETE from applyjob where account_id = '$id' and job_id != '$jobid'";
mysqli_query($conn,$sql2);

$sql = "INSERT INTO initial_interview (acc_id,admin_id) values ('$id','$admin')";
mysqli_query($conn,$sql);


$sql1 = "UPDATE applyjob set apply_status='$status',make_interview='$count' where account_id = '$id'";
mysqli_query($conn,$sql1);
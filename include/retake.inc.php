<?php
include "dbc.inc.php";
session_start();
$id = $_POST["id"];
$admin = $_SESSION["userId"];
$status = "Retake Exam";
$count = 1;

// $type = "final";
// $sql = "INSERT INTO interview (acc_id,admin_id,type_interview) values ('$id','$admin','$type')";
// mysqli_query($conn,$sql);

$sql1 = "UPDATE applyjob set apply_status='$status' where account_id = '$id'";
mysqli_query($conn,$sql1);
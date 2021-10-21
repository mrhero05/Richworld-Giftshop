<?php
include "dbc.inc.php";
session_start();
$id = $_POST["id"];
$admin = $_SESSION["userId"];
$status = "Medical Exam";
$count = 1;

$sql = "INSERT INTO medical_exam (acc_id,admin_id) values ('$id','$admin')";
mysqli_query($conn,$sql);

$sql1 = "UPDATE applyjob set apply_status='$status',final_interview='$count' where account_id = '$id'";
mysqli_query($conn,$sql1);
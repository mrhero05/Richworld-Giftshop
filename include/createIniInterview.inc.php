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
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
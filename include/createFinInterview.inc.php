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
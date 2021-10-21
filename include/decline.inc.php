<?php
include "dbc.inc.php";
session_start();
$id = $_POST["id"];
$admin = $_SESSION["userId"];
$status = "User Decline";
$count = 0;


$sql = "DELETE from applyjob where account_id = '$id'";
mysqli_query($conn,$sql);
$sql1 = "INSERT INTO user_decline (acc_id,admin_id) values ('$id','$admin')";
mysqli_query($conn,$sql1);

// $sql1 = "UPDATE applyjob set apply_status='$status' where account_id = '$id'";
// mysqli_query($conn,$sql1);
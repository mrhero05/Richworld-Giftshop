<?php
include "dbc.inc.php";
session_start();
$id = $_POST["id"];
$admin = $_SESSION["userId"];
$status = "Submiting Requirements";
$count = 1;

$sql = "INSERT INTO sub_req (acc_id,admin_id) values ('$id','$admin')";
mysqli_query($conn,$sql);

$msg = "To submit your requirements please email us at richworldgiftshop@gmail.com";
$sql2 = "INSERT INTO messages (sender_id,reciever_id,msg) values ('$admin','$id','$msg')";
mysqli_query($conn,$sql2);

$sql1 = "UPDATE applyjob set apply_status='$status',medical_exam='$count' where account_id = '$id'";
mysqli_query($conn,$sql1);
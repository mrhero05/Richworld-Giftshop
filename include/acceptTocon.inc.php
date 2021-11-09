<?php
include "dbc.inc.php";
session_start();
$id = $_POST["id"];
$admin = $_SESSION["userId"];
$status = "Contract Signing";
$count = 1;

$sql = "INSERT INTO contracts (acc_id,admin_id) values ('$id','$admin')";
mysqli_query($conn,$sql);

$msg = "This is your employement contract agreement please read it carefully and you can ask us some question. After you fill up submit it again at richworldgiftshop@gmail.com
Click the link below to download the file. link : shorturl.at/jwBRV";

$sql2 = "INSERT INTO messages (sender_id,reciever_id,msg) values ('$admin','$id','$msg')";
mysqli_query($conn,$sql2);

$sql1 = "UPDATE applyjob set apply_status='$status',sub_req='$count' where account_id = '$id'";
mysqli_query($conn,$sql1);


$fulldate = date('m/d/Y');
$currentDateTime = date('m/d/Y H:i:s');
$time = date('h:i A', strtotime($currentDateTime));
$sqllog = "INSERT INTO activitylog (admin_id,log_date,log_time,log_desc) values ('$admin','$fulldate','$time','Accept user to contract signing')";
mysqli_query($conn,$sqllog);
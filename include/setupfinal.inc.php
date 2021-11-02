<?php
// if(!empty($_POST["date"]) && !empty($_POST["time"]) && !empty($_POST["id"]) && !empty($_POST["link"]) && !empty($_POST["meet_msg"])){
include "dbc.inc.php";
session_start();
$date = $_POST["date"];
$time = $_POST["time"];
$link = $_POST["link"];
$id = $_POST["id"];
$msg = $_POST["meet_msg"];
$admin = $_SESSION["userId"];

$sqlmanager = "SELECT * from account where acc_type='hrmanager'";
$resultmanager = mysqli_query($conn,$sqlmanager);
$row = mysqli_fetch_assoc($resultmanager);

$hrmanager = $row["acc_id"];

$sql = "INSERT into final_sched (finsched_acc_id,finsched_admin_id,finsched_date,finsched_time,finsched_link) values ('$id',$admin,'$date','$time','$link')";
mysqli_query($conn,$sql);

$sqlmsg = "INSERT into messages (sender_id,reciever_id,msg,useracc_id,msg_type) values ('$admin','$hrmanager','$msg','$id','final')";
mysqli_query($conn,$sqlmsg);


header("location:../joblisting.php?success=sendsuccess");
exit();

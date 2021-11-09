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

$sql = "INSERT into initial_sched (inisched_acc_id,inisched_admin_id,inisched_date,inisched_time,meet_link) values ('$id',$admin,'$date','$time','$link')";
mysqli_query($conn,$sql);

$sqlmsg = "INSERT into messages (sender_id,reciever_id,msg,useracc_id,msg_type) values ('$admin','$hrmanager','$msg','$id','initial')";
mysqli_query($conn,$sqlmsg);

$fulldate = date('m/d/Y');
$currentDateTime = date('m/d/Y H:i:s');
$time1 = date('h:i A', strtotime($currentDateTime));
$sqllog = "INSERT INTO activitylog (admin_id,log_date,log_time,log_desc) values ('$admin','$fulldate','$time1','Schedule user to initial interview')";
mysqli_query($conn,$sqllog);
header("location:../joblisting.php?success=sendsuccess");
exit();

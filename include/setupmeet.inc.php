<?php
if(!empty($_POST["date"]) && !empty($_POST["time"]) && !empty($_POST["id"]) && !empty($_POST["link"]) && !empty($_POST["meet_msg"])){
include "dbc.inc.php";
session_start();
$date = $_POST["date"];
$time = $_POST["time"];
$id = $_POST["id"];
$link = $_POST["link"];
$msg = $_POST["meet_msg"];
$admin = $_SESSION["userId"];
$interview = $_POST["radioI"];
$count = 1;

if($interview == "final"){
    $sql2 = "UPDATE applyjob set make_final='$count' where account_id = '$id'";
    mysqli_query($conn,$sql2);
}
$sql1 = "UPDATE applyjob set initial_interview='$count' where account_id = '$id'";
mysqli_query($conn,$sql1);

$sql = "INSERT INTO meeting (meet_date,meet_time,reciever_id,meet_link,meet_msg,acc_id,interview) values ('$date','$time','$id','$link','$msg','$admin','$interview')";
mysqli_query($conn,$sql);

$exactmsg = $msg ." Please join with the meeting link " .$link. " at ".$date. " and the time is " .$time. " for your " .$interview. " interview." ;
$sql2 = "INSERT into messages (sender_id,reciever_id,msg) values ('$admin','$id','$exactmsg')";
mysqli_query($conn,$sql2);

header("location:../joblisting.php?success=sendsuccess");
exit();
}else{
    header("location:../joblisting.php?error=error");
    exit();
}
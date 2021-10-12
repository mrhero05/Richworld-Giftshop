<?php
if(!empty($_POST["date"]) && !empty($_POST["time"]) && !empty($_POST["id"]) && !empty($_POST["link"]) && !empty($_POST["meet_msg"])){
include "dbc.inc.php";
session_start();
$date = $_POST["date"];
$time = $_POST["time"];
$id = $_POST["id"];
$link = $_POST["link"];
$msg = $_POST["meet_msg"];
$admin = $_SESSION["userId"];;

$sql = "INSERT INTO meeting (meet_date,meet_time,reciever_id,meet_link,meet_msg,acc_id) values ('$date','$time','$id','$link','$msg','$admin')";
mysqli_query($conn,$sql);
header("location:../joblisting.php?success=sendsuccess");
exit();
}else{
    header("location:../joblisting.php?error=error");
    exit();
}
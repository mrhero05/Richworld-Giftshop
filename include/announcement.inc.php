<?php
if(isset($_POST["submitann"]) && !empty($_POST["title"]) && !empty($_POST["description"])){
include "dbc.inc.php";
session_start();
$fullid = $_SESSION["userId"];
$fullname = $_POST["fullname"];
$title = $_POST["title"];
$description = $_POST["description"];
date_default_timezone_set('Asia/Manila');
$fulldate = date('m/d/Y');
$currentDateTime = date('m/d/Y H:i:s');
$time = date('h:i A', strtotime($currentDateTime));
$sql = "INSERT into announcement (fullname,title,ann_description,admin_id,ann_time,ann_date) values ('$fullname','$title','$description','$fullid','$time','$fulldate')";
mysqli_query($conn,$sql);
header("location:../announcement.php?successpost");
exit();
}else{
    header("location:../announcement.php");
exit();
}
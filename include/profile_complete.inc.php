<?php
include "dbc.inc.php";
session_start();
$accid = $_SESSION["userId"];
$age = $_POST["age"];
$birthday = $_POST["bday"];
$status = $_POST["type"];
$address = $_POST["address"];
$gender = $_POST["gender"];


$sql = "UPDATE account_complete SET age='$age',birthday='$birthday',civilstatus='$status',caddress='$address',gender='$gender' where acc_id = '$accid'";
mysqli_query($conn,$sql);
header("location:../index.php");
exit();
?>
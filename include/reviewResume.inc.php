<?php
include "dbc.inc.php";
session_start();
$id = $_POST["id"];
$admin = $_SESSION["userId"];
$status = "Reviewing Resume";
$count = 1;

$sql1 = "UPDATE applyjob set apply_status='$status',submit_resume='$count' where account_id = '$id'";
mysqli_query($conn,$sql1);
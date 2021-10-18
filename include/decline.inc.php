<?php
include "dbc.inc.php";
session_start();
$id = $_POST["id"];
$admin = $_SESSION["userId"];
$status = "User Decline";
$count = 0;


// $sql1 = "DELETE from applyjob where account_id = '$id'";
// mysqli_query($conn,$sql1);

$sql1 = "UPDATE applyjob set apply_status='$status',submit_resume='$count',make_interview='$count',initial_interview='$count',make_written='$count' where account_id = '$id'";
mysqli_query($conn,$sql1);
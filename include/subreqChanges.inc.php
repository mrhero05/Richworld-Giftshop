<?php
include "dbc.inc.php";
$id = $_POST["id"];

if(!isset($_POST["sss"])){
$sss = 0;
}else{
$sss = $_POST["sss"];
}

if(!isset($_POST["pagibig"])){
$pagibig = 0;
}else{
$pagibig = $_POST["pagibig"];
}

if(!isset($_POST["nbi"])){
$nbi = 0;
}else{
$nbi = $_POST["nbi"];
}

if(!isset($_POST["philhealth"])){
$philhealth = 0;
}else{
$philhealth = $_POST["philhealth"];
}

if(!isset($_POST["medical"])){
$medical = 0;
}else{
$medical = $_POST["medical"];
}



$sql = "UPDATE sub_req_view set sss='$sss',pagibig='$pagibig',nbi='$nbi',philhealth='$philhealth',medical='$medical' where acc_id = '$id'";
mysqli_query($conn,$sql);
header("location:../joblisting.php?savesuccess");
exit();
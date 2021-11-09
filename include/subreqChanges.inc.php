<?php
session_start();
include "dbc.inc.php";
$id = $_POST["id"];
$admin = $_SESSION["userId"];

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

$sql1 = "SELECT * from sub_req_view where acc_id = '$id'";
$result1 = mysqli_query($conn,$sql1);
if(mysqli_num_rows($result1) > 0){
    $csss = 0;
    $cpagibig = 0;
    $cnbi = 0;
    $cphil = 0;
    $cmed = 0;
    while($row = mysqli_fetch_assoc($result1)){
        $csss = $row["sss"];
        $cpagibig = $row["pagibig"];
        $cnbi = $row["nbi"];
        $cphil = $row["philehealth"];
        $cmed = $row["medical"];
    }
    if($csss = 1 && $cpagibig = 1 && $cnbi = 1 && $cphil = 1 && $cmed = 1){
        $sql2 = "INSERT INTO contracts (acc_id,admin_id) values ('$id','$admin')";
        $status = "Contract Signing";
        $sql3 = "UPDATE applyjob set apply_status = '$status',sub_req=1";
        mysqli_query($conn,$sql3);
        mysqli_query($conn,$sql2);

        $fulldate = date('m/d/Y');
        $currentDateTime = date('m/d/Y H:i:s');
        $time = date('h:i A', strtotime($currentDateTime));
        $sqllog = "INSERT INTO activitylog (admin_id,log_date,log_time,log_desc) values ('$admin','$fulldate','$time','User added to Contract signing')";
        mysqli_query($conn,$sqllog);
    }
}
header("location:../joblisting.php?savesuccess");
exit();
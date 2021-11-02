<?php
include "dbc.inc.php";
session_start();
$id = $_POST["initid"];
$admin = $_SESSION["userId"];
$status = "Final Interview Passed / Submitting Requirements";
$count = 1;

$sql = "INSERT INTO sub_req (acc_id,admin_id) values ('$id','$admin')";
mysqli_query($conn,$sql);

$sql5 = "INSERT INTO sub_req_view (acc_id,admin_id,sss,pagibig,nbi,philhealth,medical) values ('$id','$admin',0,0,0,0,0)";
mysqli_query($conn,$sql5);

$sql1 = "UPDATE applyjob set apply_status='$status',final_interview='$count',make_final='$count' where account_id = '$id'";
mysqli_query($conn,$sql1);

$sql3 = "SELECT account.firstname,account.lastname,job.job_name from account INNER join applyjob on account.acc_id = applyjob.account_id INNER join job on job.job_id = applyjob.job_id where account.acc_id = '$id'";
$result = mysqli_query($conn,$sql3);
$fullname = "";
$jobname = "";
while($row = mysqli_fetch_assoc($result)){
    $fullname = $row["firstname"]." ".$row["lastname"];
    $jobname = $row["job_name"];
}


$msg = 'Congratulations, Mr/Ms/Mrs. '.$fullname.' for passing the hiring process for '.$jobname.'. We are welcoming you to the organization as being a new part of our company. May you be productive and responsible for all the responsibilities that you have as a newly hired for the position that you applied for. We expect for your optimistic personality that you may share to your co-workers.
But before we proceed you to contract signing and deployment you have to comply the major requirements that we need from you like TIN NO, SSS NO, PAG IBIG, updated NBI record, and the medical exam result. You may send the all the requirements through Gmail at richworldgiftshop@gmail.com , If you have any concerns and clarifications you may approach the HR Recruitment. Thank you!';

$sqlmanager = "SELECT * from account where acc_type='department'";
$resultmanager = mysqli_query($conn,$sqlmanager);
$row = mysqli_fetch_assoc($resultmanager);

$hrdep = $row["acc_id"];
$sql2 = "INSERT into messages (sender_id,reciever_id,msg,useracc_id,msg_type) values ('$admin','$hrdep','$msg','$id','personal')";
mysqli_query($conn,$sql2);



header("location:../depmanager.php?success");
exit();
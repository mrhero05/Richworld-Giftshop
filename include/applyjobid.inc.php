<?php
if(isset($_POST["applyB"])){
include 'dbc.inc.php';
session_start();
$accid = $_SESSION["userId"];
$jobid = $_POST["job_id"];

$resume= "";
$tor="";
$letter="";
$sqlget = "SELECT * from account_complete where acc_id = '$accid'";
$resultget = mysqli_query($conn,$sqlget);
if(mysqli_num_rows($resultget) > 0){
    while($row = mysqli_fetch_assoc($resultget)){
        $resume = $row["apply_resume"];
        $tor = $row["tor"];
        $letter = $row["letter"];
    }
}

$sql = "INSERT INTO applyjob (account_id,job_id,apply_resume,appletter,tor,apply_status,submit_resume,make_interview,initial_interview,make_written,written_exam,make_final,final_interview,sub_req,contract_sign,deployment) values ('$accid','$jobid','$resume','$letter','$tor','Pending',1,0,0,0,0,0,0,0,0,0)";
mysqli_query($conn,$sql);
header("location:../job.php?success");
exit();
}
<?php
include "dbc.inc.php";
session_start();
$id = $_POST["id"];
$admin = $_SESSION["userId"];
$status = "Deployment";
$count = 1;

$sql = "INSERT INTO deployment (acc_id,admin_id) values ('$id','$admin')";
mysqli_query($conn,$sql);


$sql1 = "UPDATE applyjob set apply_status='$status',contract_sign='$count' where account_id = '$id'";
mysqli_query($conn,$sql1);

$fname = "";
$lname = "";
$age = "";
$email = "";
$gender = "";
$civil = "";
$contact = "";
$jobname = "";
$caddress = "";
$sqllong = "SELECT account.firstname,account.lastname,account_complete.age,account.email,account_complete.gender,account_complete.civilstatus,account.contact,job.job_name,account_complete.caddress from account_complete INNER JOIN account on account.acc_id = account_complete.acc_id INNER JOIN applyjob on applyjob.account_id = account_complete.acc_id INNER JOIN job on job.job_id = applyjob.job_id";
$resultlong = mysqli_query($conn,$sqllong);
if(mysqli_num_rows($resultlong) > 0){
    while($row = mysqli_fetch_assoc($resultlong)){
        $fname = $row["firstname"];
        $lname = $row["lastname"];
        $age = $row["age"];
        $email = $row["email"];
        $gender = $row["gender"];
        $civil = $row["civilstatus"];
        $contact = $row["contact"];
        $contract = $row["contract"];
        $jobname = $row["job_name"];
        $caddress = $row["caddress"];
    }
}

$emptype = "Under probation";
$probperiod = "3 months";
$empcontract = "2 years";

$sqlemp = "INSERT into employee (emp_fname,emp_lname,emp_age,emp_email,emp_gender,emp_civil,emp_contact,emp_jobTitle,emp_empType,emp_probPeriod,emp_perAdd,emp_empContract) values ('".$fname."','".$lname."','".$age."','".$email."','".$gender."','".$civil."','".$contact."','".$jobname."','".$emptype."','".$probperiod."','".$caddress."','".$empcontract."')";
mysqli_query($conn,$sqlemp);

$addhired = "UPDATE job set job_hired=job_hired+1 where job_name='$jobname'";
mysqli_query($conn,$addhired);

$fulldate = date('m/d/Y');
$currentDateTime = date('m/d/Y H:i:s');
$time = date('h:i A', strtotime($currentDateTime));
$sqllog = "INSERT INTO activitylog (admin_id,log_date,log_time,log_desc) values ('$admin','$fulldate','$time','User add to deployment')";
mysqli_query($conn,$sqllog);
<?php
include 'dbc.inc.php';

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$age=$_POST["age"];
$email=$_POST["email"];
$gender=$_POST["gender"];
$civil=$_POST["civil"];
$contact=$_POST["contact"];
$jobtitle=$_POST["jobtitle"];
$emptype=$_POST["emptype"];
$probperiod=$_POST["probperiod"];
$peradd=$_POST["peradd"];
$empcontract=$_POST["empcontract"];

$sql = "INSERT into employee (emp_fname,emp_lname,emp_age,emp_email,emp_gender,emp_civil,emp_contact,emp_jobTitle,emp_empType,emp_probPeriod,emp_perAdd,emp_empContract) values ('".$fname."','".$lname."','".$age."','".$email."','".$gender."','".$civil."','".$contact."','".$jobtitle."','".$emptype."','".$probperiod."','".$peradd."','".$empcontract."')";
mysqli_query($conn,$sql);
echo '<script>alert("Employee Added Successfully");</script>';
$success = false;
function success(){
    $success = true;
    return $success;
}

$fulldate = date('m/d/Y');
$currentDateTime = date('m/d/Y H:i:s');
$time = date('h:i A', strtotime($currentDateTime));
$sqllog = "INSERT INTO activitylog (admin_id,log_date,log_time,log_desc) values ('$admin','$fulldate','$time','Added user to employee')";
mysqli_query($conn,$sqllog);
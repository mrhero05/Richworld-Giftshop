<?php
include 'dbc.inc.php';

$id=$_POST["id"];
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

$sql = "UPDATE employee set emp_fname='".$fname."',emp_lname='".$lname."',emp_age='".$age."',emp_email='".$email."',emp_gender='".$gender."',emp_civil='".$civil."',emp_contact='".$contact."',emp_jobTitle='".$jobtitle."',emp_empType='".$emptype."',emp_probPeriod='".$probperiod."',emp_perAdd='".$peradd."',emp_empContract='".$empcontract."' where emp_id='".$id."'";
mysqli_query($conn,$sql);
echo '<script>alert("Employee Updated Successfully");</script>';
$success = false;
function success(){
    $success = true;
    return $success;
}
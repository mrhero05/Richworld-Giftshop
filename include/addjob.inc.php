<?php
include "dbc.inc.php";
$jtitle = $_POST["title"];
$jsalarymin = $_POST["salarymin"];
$jsalarymax = $_POST["salarymax"];
$jvacant = $_POST["vacant"];
$jdesc = $_POST["desc"];
$bjob = $_POST["jobb"];

if(isset($bjob)){
    $sql = "INSERT into job (job_name,job_desc,job_salary_min,job_salary_max,job_vacant,job_applied,job_hired) values ('".$jtitle."','".$jdesc."','".$jsalarymin."','".$jsalarymax."','".$jvacant."',0,0)";
    mysqli_query($conn,$sql);
    echo '<script>swal("Add job success", "You successfully added job", "success");</script>';
}

$fulldate = date('m/d/Y');
$currentDateTime = date('m/d/Y H:i:s');
$time = date('h:i A', strtotime($currentDateTime));
$sqllog = "INSERT INTO activitylog (admin_id,log_date,log_time,log_desc) values ('$admin','$fulldate','$time','Added new job')";
mysqli_query($conn,$sqllog);
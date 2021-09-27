<?php
include "dbc.inc.php";
$jtitle = $_POST["title"];
$jsalarymin = $_POST["salarymin"];
$jsalarymax = $_POST["salarymax"];
$jvacant = $_POST["vacant"];
$jdesc = $_POST["desc"];
$bjob = $_POST["jobb"];

if(isset($bjob)){
    $sql = "INSERT into job (job_name,job_desc,job_salary_min,job_salary_max,job_vacant,job_applied) values ('".$jtitle."','".$jdesc."','".$jsalarymin."','".$jsalarymax."','".$jvacant."',0)";
    mysqli_query($conn,$sql);
    echo '<script>alert("Job Added Successfully");</script>';
}
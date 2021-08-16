<?php
include "dbc.inc.php";
$jtitle = $_POST["title"];
$jsalary = $_POST["salary"];
$jvacant = $_POST["vacant"];
$jdesc = $_POST["desc"];
$bjob = $_POST["jobb"];

if(isset($bjob)){
    $sql = "INSERT into job (job_name,job_desc,job_salary,job_vacant) values ('".$jtitle."','".$jdesc."','".$jsalary."','".$jvacant."')";
    mysqli_query($conn,$sql);
    echo '<script>alert("Job Added Successfully");</script>';
}

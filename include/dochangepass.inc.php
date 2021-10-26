<?php
session_start();
$accid = $_SESSION["forgot_id"]; 
$pass1 = $_POST["pass1"];
$pass2 = $_POST["pass2"];
include "dbc.inc.php";

if($pass1 == $pass2){
$password = password_hash($pass1,PASSWORD_DEFAULT);
$sql = "UPDATE account set acc_pass = '$password' where acc_id = '$accid'";
mysqli_query($conn,$sql);
header("location:../login.php?changepass=success");
    exit();
}else{
    header("location:changepass.inc.php?error=passwordnotmatch");
    exit();
}
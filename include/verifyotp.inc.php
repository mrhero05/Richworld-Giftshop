<?php
include "dbc.inc.php";
session_start();
$input = $_POST["otpinput"];
$userid = $_SESSION["userId"];

$sql = "SELECT * from account where acc_id='$userid'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
    $otp = $row["otp"];
    if($input == $otp){
        $sql1 = "UPDATE account set verify = 1 where acc_id='$userid'";
        mysqli_query($conn,$sql1);
        echo '<p style="color:green">Email Verified ! &#9989</p>
        ';
    }else{
        echo '<p style="color:red">Wrong OTP code &#9746</p>
        <input type="hidden" id="checkver" value="notverified">
        ';
    }
}

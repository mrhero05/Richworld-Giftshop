<?php
include "dbc.inc.php";
session_start();
$input = $_POST["code"];
$email = $_SESSION["emailused"];

$sql = "SELECT * from account where email = '$email'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $otp = $row["otp"];
        $_SESSION["forgot_id"] = $row["acc_id"];
        if($input == $otp){
            header("location:changepass.inc.php");
            exit();
        }else{
            header("location:../login.php?error=wrongotp");
            exit();
        }
    }
}
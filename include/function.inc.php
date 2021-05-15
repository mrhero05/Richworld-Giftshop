<?php
function login($conn,$user,$pass){
    // select if username match anyone
    $sql = "SELECT * from account where acc_user=? and acc_pass=?";
    // initializing the statement 
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("location: ../login.php?error=stmt-failed");
        exit();
    }
    mysqli_stmt_bind_param($stmt,"ss",$user,$pass);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($result)){
        $userGranted = $row["acc_pass"];
        if($userGranted == $pass){
            header("location: ../dashboard.php");
            exit();
        }else{
        return false;
        }
    }else{
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}


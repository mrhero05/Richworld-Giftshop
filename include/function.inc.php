<?php
//function para sa login
function login($conn,$user,$pass){
    // select if username match anyone
    $sql = "SELECT * from account where acc_user=?";
    // initializing the statement 
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("location: ../login.php?error=stmt-failed");
        exit();
    }
    // mysqli_stmt_bind_param($stmt,"ss",$user,$pass);
    mysqli_stmt_bind_param($stmt,"s",$user);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($result)){
        $userGranted = $row["acc_pass"];
        
        if(password_verify($pass,$userGranted)){
            session_start();
            $_SESSION["profile-name"]= $row["firstname"]." ".$row["lastname"];
            $_SESSION["usertype"] = $row["user_status"];
            $_SESSION["userId"]=$row["acc_id"];
            $_SESSION["profPath"]=$row["prof_path"];
            $_SESSION["acc_type"]=$row["acc_type"];
            
            if($_SESSION["usertype"] == 0){
            header("location: ../compProf.inc.php");
            exit();
            }else{
            // header("location: ../dashboard.php");
            // exit(); 
            $_SESSION["acc_type"] = $row["acc_type"];  
                if($_SESSION["acc_type"]=="user"){
                    header("location: ../index.php");
                    exit();
                }else if($_SESSION["acc_type"]=="admin" || $_SESSION["acc_type"]=="hrmanager" || $_SESSION["acc_type"]=="hrrecruiter"){
                    header("location: ../dashboard.php");
                    exit();
                }
            }
            
        }else{
        return false;
        }
    }else{
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

//check if password match retype
function retypePass($pass,$pass2){
    if($pass == $pass2){
        return true;
    }else{
        return false;
        exit();
    }
}

//function to check empty input in register
function emptyInputRegister($fname,$lname,$contact,$uname,$pass,$pass2){
    $result = true;
    if(empty($fname) || empty($lname) || empty($contact) || empty($uname) || empty($pass) || empty($pass2)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}
//for user exist
function uexist($conn,$uname){
    $result = 1;
    $checkuser = "SELECT * from account where acc_user = ".$uname."";
    $result = mysqli_query($conn,$checkuser);
    if(mysqli_num_rows($result) > 0){
        $result = 1;
    }else{
        $result = 0;
    }
    return $result;
    exit();
}
//function para sa register
function register($conn,$uname,$pass,$fname,$lname,$contact,$email,$acctype){
    // $result = uexist($conn,$uname);
  
    //  if($result == 1){
    //     // echo "error";
    //     header("location: ../register.php?error=user-exist");
    //     exit();
    //    //register($conn,$uname,$pass,$fname,$lname,$contact,$email);
    //   }else{}
      
      
    $type = "0";
    $sql = "INSERT into account (acc_user,acc_pass,firstname,lastname,contact,email,user_status,prof_path,q_number,q_answer,acc_type,otp,verify) values (?,?,?,?,?,?,?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)) {
        header("location: ../register.php?error=stmt-failed");
        exit();
    }
    // to hash the password to make it more secure
    $hashpass = password_hash($pass,PASSWORD_DEFAULT);
    
    mysqli_stmt_bind_param($stmt,"ssssisssisssi",$uname,$hashpass,$fname,$lname,$contact,$email,$type,$type,$type,$type,$acctype,$type,$type);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    echo "<script>alert(' ')</script>";
    session_start();
    $acc = $_SESSION["acc_type"];
    if($acc == "admin"){
        header("location: ../register.php?success=account-create-successfully");
        return true;
        exit();
    }
    header("location: ../register.php?success=account-create-successfully");
    
    return true;
    exit();

}

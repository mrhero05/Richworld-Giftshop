<?php
//  dito boss mapupunta naman yung tinype sa register papasa dito yung laman
if(isset($_POST["submit"])){
    // ito pag dideclare ng variable na galing sa input
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $contact = $_POST["contact"];
    $uname = $_POST["uname"];
    $pass = $_POST["pass"];
    $pass2 = $_POST["pass2"];
    $email = "0";
    
    // pag aadd ng connection at file ng function
    require_once 'dbc.inc.php';
    require_once 'function.inc.php';

    //check kung empty input ba
    $emptyInput = emptyInputRegister($fname,$lname,$contact,$uname,$pass,$pass2,$email);
    if($emptyInput == false){
        if(is_numeric($contact)){
            //check kung tama ba yung retype pass
            $passmatch = retypePass($pass,$pass2);
            
            if($passmatch == true){
                $result = $_POST["userExistId"];
                if($result == 1){
                    header("location: ../register.php?error=user-exist");
                    exit();
                }else{        
                   register($conn,$uname,$pass,$fname,$lname,$contact,$email);
                }
                   
            }else{
                header("location: ../register.php?error=password-not-match");
                exit();
            }
        }else{
            header("location: ../register.php?error=contact-number-only");
                exit();
        }

    }else{
        header("location: ../register.php?error=empty-input");
            exit();
    }
}else{
    header("location: ../register.php?error=please-fill-up-register");
        exit();
}
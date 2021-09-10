<?php
// dito kukunin nya yung laman ng input gamit yung post method

//ichecheck nya kung meron bang submit post method - kung na click ba si submit
if(isset($_POST["submit"])){
    $username = $_POST["user"];
    $password = $_POST["pass"];
    require_once 'dbc.inc.php';
    require_once 'function.inc.php';
    if(!(empty($username) || empty($password))){
        $checklog = login($conn,$username,$password);
        if($checklog == false){
            header("location: ../login.php?error=wronglogin");
            exit();
        }
    }else{
        header("location: ../login.php?error=empty-input");
        exit();
    }
}else{
    header("location: ../login.php");
    exit();
}
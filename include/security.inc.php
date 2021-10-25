<?php 
include "dbc.inc.php";
$user = $_POST["user"];
$qnum = $_POST["qnumber"];
$qans = $_POST["qanswer"];

$sql = "SELECT * from account where acc_user = '$user'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        if($qnum == $row["q_number"] && $qans == $row["q_answer"]){
            session_start();
            $_SESSION["forgot_id"] = $row["acc_id"];
            header("location:changepass.inc.php");
            exit();
        }else{
            header("location:../login.php?forgotpass=wronganswer");
            exit();
        }
    }
}else{
    header("location:../login.php?forgotpass=nouserfound");
    exit();
}
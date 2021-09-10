<?php
include "dbc.inc.php";
$useruse = $_POST["suser"];

    $result = 1;
    $sql = "SELECT * from account where acc_user = '$useruse'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
        echo '<p style="color:red">Username already Exist &#9746;</p>';
        $result = 1;
        echo "<input type='hidden' name='userExistId' value='$result'>";
       
        //echo '<input type="hidden" name="userExistId" value="a">'
        
    }else{
        echo '<p style="color:green">Username Available  &#9989</p>';
        $result = 0;
        echo "<input type='hidden' name='userExistId' value='$result'>";
    }
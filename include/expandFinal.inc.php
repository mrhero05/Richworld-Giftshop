<?php
include "dbc.inc.php";

$sql = "SELECT account.firstname,account.lastname,finsched_date,finsched_time,finsched_link from final_sched INNER JOIN account on account.acc_id = final_sched.finsched_acc_id";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo '
            <div class="msg-right-div" style="background-color:lightblue;margin-left:auto;margin-right:auto">
            <p>You have scheduled for Final interview to '.$row["firstname"].' '.$row["lastname"].' on '.$row["finsched_date"].' at '.$row["finsched_time"].'
             Meet Link : <a href="'.$row["finsched_link"].'">'.$row["finsched_link"].'</a>
            </p>
            </div>';
    }
}
<?php
include "dbc.inc.php";

$sql = "SELECT account.firstname,account.lastname,inisched_date,inisched_time,meet_link from initial_sched INNER JOIN account on account.acc_id = initial_sched.inisched_acc_id";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo '
            <div class="msg-right-div" style="background-color:lightblue;margin-left:auto;margin-right:auto">
            <p>You have scheduled for initial interview to '.$row["firstname"].' '.$row["lastname"].' on '.$row["inisched_date"].' at '.$row["inisched_time"].'
             Meet Link : <a href="'.$row["meet_link"].'">'.$row["meet_link"].'</a>
            </p>
            </div>';
    }
}
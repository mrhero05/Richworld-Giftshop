<?php
include "dbc.inc.php";

$sql = "SELECT account.firstname,account.lastname,wsched_date,wsched_time,wsched_link from written_sched INNER JOIN account on account.acc_id = written_sched.wsched_accid";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo '
            <div class="msg-right-div" style="background-color:lightblue;margin-left:auto;margin-right:auto">
            <p>You have schedule for Written Exam to '.$row["firstname"].' '.$row["lastname"].' on '.$row["wsched_date"].' at '.$row["wsched_time"].'
             Meet Link : <a href="'.$row["wsched_link"].'">'.$row["wsched_link"].'</a>
            </p>
            </div>';
    }
}
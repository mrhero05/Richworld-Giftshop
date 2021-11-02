<?php
include "dbc.inc.php";
$id = $_POST["id"];

$sql = "SELECT inisched_date,inisched_time,meet_link,messages.msg from initial_sched INNER join messages on messages.useracc_id = initial_sched.inisched_acc_id where messages.useracc_id = '$id' and messages.msg_type='initial'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo '
            <div class="msg-right-div" style="background-color:lightblue;margin-left:auto;margin-right:auto">
            <p>Hello You have schedule for Initial Interview on '.$row["inisched_date"].' at '.$row["inisched_time"].'
             Meet Link : <a href="'.$row["meet_link"].'">'.$row["meet_link"].'</a>
            </p>
            </div>';
    }
}

$sql1 = "SELECT wsched_date,wsched_time,wsched_link,messages.msg from written_sched INNER join messages on messages.useracc_id = written_sched.wsched_accid where messages.useracc_id = '$id' and messages.msg_type='written'";
$result1 = mysqli_query($conn,$sql1);

if(mysqli_num_rows($result1) > 0){
    while($row = mysqli_fetch_assoc($result1)){
        echo '
            <div class="msg-right-div" style="background-color:lightblue;margin-left:auto;margin-right:auto">
            <p>Hello You have schedule for Written Exam on '.$row["wsched_date"].' at '.$row["wsched_time"].'
             Meet Link : <a href="'.$row["wsched_link"].'">'.$row["wsched_link"].'</a>
            </p>
            </div>';
    }
}

$sql2 = "SELECT finsched_date,finsched_time,finsched_link,messages.msg from final_sched INNER join messages on messages.useracc_id = final_sched.finsched_acc_id where messages.useracc_id = '$id' and messages.msg_type='final'";
$result2 = mysqli_query($conn,$sql2);

if(mysqli_num_rows($result2) > 0){
    while($row = mysqli_fetch_assoc($result2)){
        echo '
            <div class="msg-right-div" style="background-color:lightblue;margin-left:auto;margin-right:auto">
            <p>Hello You have schedule for Final Interview on '.$row["finsched_date"].' at '.$row["finsched_time"].'
             Meet Link : <a href="'.$row["finsched_link"].'">'.$row["finsched_link"].'</a>
            </p>
            </div>';
    }
}

$sql3 = "SELECT * from messages where useracc_id = '$id' and msg_type='personal'";
$result3 = mysqli_query($conn,$sql3);

if(mysqli_num_rows($result3) > 0){
    while($row = mysqli_fetch_assoc($result3)){
        echo '
            <div class="msg-right-div" style="background-color:lightblue;margin-left:auto;margin-right:auto">
            <p>'.$row["msg"].'</a>
            </p>
            </div>';
    }
}
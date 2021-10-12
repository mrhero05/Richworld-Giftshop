<?php
include "dbc.inc.php";

$rId = $_POST["recieverId"];
$sId = $_POST["senderId"];

$sql = "SELECT * from messages where (sender_id = '$sId' and reciever_id = '$rId') or (sender_id = '$rId' and reciever_id = '$sId')";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        if($sId == $row["sender_id"]){
            echo '<div class="msg-right-div" style="background-color:lightblue;margin-left:48%">
            <p>'.$row["msg"].'</p>
            </div>';
        }else{
            echo '<div class="msg-right-div">
            <p>'.$row["msg"].'</p>
            </div>';
        }
    }
}
exit();
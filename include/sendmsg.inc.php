<?php
include "dbc.inc.php";
if(!empty($_POST["sMsg"])){

$rId = $_POST["recieverId"];
$sId = $_POST["senderId"];
$msg = $_POST["sMsg"];

$sql = "INSERT into messages (reciever_id,sender_id,msg) values ('$rId','$sId','$msg')";
mysqli_query($conn,$sql);

$sql1 = "SELECT * from messages where (sender_id = '$sId' and reciever_id = '$rId') or (sender_id = '$rId' and reciever_id = '$sId')";
$result = mysqli_query($conn,$sql1);
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
}
exit();
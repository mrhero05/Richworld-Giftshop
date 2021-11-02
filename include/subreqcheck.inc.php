<?php
include "dbc.inc.php";

$id = $_POST["id"];

$sql = "SELECT * from sub_req_view where acc_id = '$id'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){

    echo '
    <input type="hidden" value="'.$id.'" name="id">
    <div class="reqcheckbox">
    ';
    if($row["sss"]==0){
        echo '
        <p>
       
        <input type="checkbox" name="sss" value="1">SSS</p>';
    }else{
        echo '<p><input type="checkbox" checked name="sss" value="1">SSS</p>';
    }
   
    if($row["pagibig"]==0){
        echo '
        <p>
       
        <input type="checkbox" name="pagibig" value="1">PAG-IBIG</p>';
    }else{
        echo '<p><input type="checkbox" checked name="pagibig" value="1">PAG-IBIG</p>';
    }

    if($row["nbi"]==0){
        echo '
       
        <p><input type="checkbox" name="nbi" value="1">NBI</p>';
    }else{
        echo '<p><input type="checkbox" checked name="nbi" value="1">NBI</p>';
    }

    if($row["philhealth"]==0){
        echo '
       
        <p><input type="checkbox" name="philhealth" value="1">PHILHEALTH</p>';
    }else{
        echo '<p><input type="checkbox" checked name="philhealth" value="1">PHILHEALTH</p>';
    }
    
    if($row["medical"]==0){
        echo '
       
        <p><input type="checkbox" name="medical" value="1">MEDICAL</p>';
    }else{
        echo '<p><input type="checkbox" checked name="medical" value="1">MEDICAL</p>';
    }

    echo '</div>
    ';
    }
}
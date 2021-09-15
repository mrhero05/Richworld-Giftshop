<?php


if(!empty($_POST["searchUser"])){
include "dbc.inc.php";
$search = $_POST["searchUser"];

$sql = "SELECT * from account where firstname like '%$search%'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        $firstname = $row["firstname"];
        echo '<option value="'.$firstname.'"></option>';
    }
}else{
    echo '<option value="0 Result"></option>';
}
}else{
    echo '<option value="0 Result"></option>';
}


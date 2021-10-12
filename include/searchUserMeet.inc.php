<?php
if(!empty($_POST["searchUser"])){
include "dbc.inc.php";
$search = $_POST["searchUser"];

$sql = "SELECT * from account where firstname like '%$search%'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
        
        echo '
    <br><div class="table-responsive" id="peopleTbl">
    <table class="table table-hover">
        <thead class="table-dark">
            <tr>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Option</th>
            </tr>
        </thead>';
    while($row = mysqli_fetch_assoc($result)){
        echo '
            <tbody>    
                <tr>                                
                <td>'.$row["firstname"].'</td>
                <td>'.$row["lastname"].'</td>
              
                <input type="hidden" class="msgUser_name" value="'.$row["firstname"].''." ".''.$row["lastname"].'">
                <input type="hidden" class="msgUser_id" value="'.$row["acc_id"].'">
                <td><button type="button" class="btn btn-primary" onclick="selectP(this)">Select</button></td>
                </tr>
            </tbody>
            ';
    }
    echo '           
    </table>
    </div>';
        // echo '
        // <div class="selectedClass">
        // <input type="hidden" value="'.$row["acc_id"].'" id="selectUserId" class="selectedId">
        // <p>'.$firstname.''.' '.'</p></div>';
    }
    // <span><input type="checkbox" onclick="selectedsearchMeet(this)" id="personC"></span>
}
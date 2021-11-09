<?php
include "dbc.inc.php";
// $id = $_POST["id"];

$sql = "SELECT account.firstname,account.lastname,written_exam.acc_id,admin_id,apply_status,written_exam,make_written FROM `written_exam` inner join account on account.acc_id = written_exam.acc_id INNER JOIN applyjob on applyjob.account_id = written_exam.acc_id";
$result = mysqli_query($conn,$sql);
echo '<table class="table table-sm table-borderless table-hover">
<thead class="table">
    <tr>
    <th scope="col">First Name</th>
    <th scope="col">Last Name</th>
    <th scope="col">Status</th>
    <th scope="col" colspan="1">Option</th>
    
    </tr>
</thead>
<tbody>'; 
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $fullname = $row["firstname"]." ".$row["lastname"];
       echo '<tr>                                
        <td>'.$row["firstname"].'</td>
        <td>'.$row["lastname"].'</td>
        <td style="color:red">'.$row["apply_status"].'</td>
        <div id="acceptdiv"></div>
        <div id="acceptTofin"></div>
        <div id="retake"></div>
        <div id="acceptTomed"></div>
        <div id="acceptToiniSched"></div>
        <input type="hidden" class="msgUser_name" value="'.$fullname.'">
        <input type="hidden" class="msgUser_id" value="'.$row["acc_id"].'">';
        
        
        if($row["make_written"] == 1 && $row["written_exam"] == 0){
            echo '<td><button type="button" class="btn-select" onclick="proceedwrittensched(this)" data-dismiss="modal" data-toggle="modal" data-target="#createwritten">Schedule</button></td>';
        }else{
            echo '<td><button type="button" class="btn-select" style="background-color:gray" disabled="true" data-dismiss="modal" >Schedule</button></td>';
        }
        echo '
        </tr>';
    }
}
echo '    
</tbody>
</table>';
        
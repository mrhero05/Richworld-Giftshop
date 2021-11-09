<?php
include "dbc.inc.php";
// $id = $_POST["id"];

$sql = "SELECT account.firstname,account.lastname,applyjob.apply_status,final_interview.acc_id,applyjob.make_final,applyjob.initial_interview from final_interview INNER JOIN account on final_interview.acc_id = account.acc_id INNER JOIN applyjob on final_interview.acc_id = applyjob.account_id";
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
        
        
        if($row["make_final"] == 1 && $row["final_exam"] == 0){
            echo '<td><button type="button" class="btn-select" onclick="proceedfinalsched(this)" data-dismiss="modal" data-toggle="modal" data-target="#createfinal">Schedule</button></td>';
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
        
    
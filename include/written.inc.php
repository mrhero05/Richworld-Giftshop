<?php
include "dbc.inc.php";
// $id = $_POST["id"];

$sql = "SELECT account.firstname,account.lastname,written_exam.acc_id,admin_id,apply_status,written_exam,make_final,final_interview FROM `written_exam` inner join account on account.acc_id = written_exam.acc_id INNER JOIN applyjob on applyjob.account_id = written_exam.acc_id";
$result = mysqli_query($conn,$sql);
echo '<table class="table table-sm table-borderless table-hover">
<thead class="table">
    <tr>
    <th scope="col">First Name</th>
    <th scope="col">Last Name</th>
    <th scope="col">Status</th>
    <th scope="col" colspan="2">Option</th>
    <th scope="col" colspan="2">Final Interview</th>
    
    </tr>
</thead>
<tbody>'; 
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
       echo '<tr>                                
        <td>'.$row["firstname"].'</td>
        <td>'.$row["lastname"].'</td>
        <td style="color:red">'.$row["apply_status"].'</td>
        <div id="acceptdiv"></div>
        <div id="acceptTofin"></div>
        <div id="retake"></div>
        <div id="acceptTomed"></div>
        <input type="hidden" class="msgUser_name" value="">
        <input type="hidden" class="msgUser_id" value="'.$row["acc_id"].'">';
        if($row["written_exam"] == 0){
            echo '<td><button type="button" class="btn-select" onclick="retakeP(this)" data-dismiss="modal">Retake</button></td>';
        }else{
            echo '<td><button type="button" class="btn-select" style="background-color:gray" disabled="true" data-dismiss="modal">Retake</button></td>';
        }
        if($row["written_exam"] == 0){
        echo '<td><button type="button" class="btn-select" onclick="passedWritten(this)" data-dismiss="modal">Passed</button></td>';
        }else{
        echo '<td><button type="button" class="btn-select" style="background-color:gray" disabled="true">Passed</button></td>';  
        }
        if($row["written_exam"] == 1 && $row["make_final"] == 1 && $row["final_interview"] == 0){
            echo '<td><button type="button" class="btn-select" onclick="declineP(this)" data-dismiss="modal">Decline</button></td>';
        }else{
            echo '<td><button type="button" class="btn-select" style="background-color:gray" disabled="true" data-dismiss="modal">Decline</button></td>';
        }
        if($row["written_exam"] == 1 && $row["make_final"] == 1 && $row["final_interview"] == 0){
            echo '<td><button type="button" class="btn-select" onclick="proceedP(this)" data-dismiss="modal">Proceed</button></td>';
        }else{
            echo '<td><button type="button" class="btn-select" style="background-color:gray" disabled="true" data-dismiss="modal">Proceed</button></td>';
        }
        echo '
        </tr>';
    }
}
echo '    
</tbody>
</table>';
        
    
<?php
include "dbc.inc.php";
// $id = $_POST["id"];

$sql = "SELECT account.firstname,account.lastname,sub_req.acc_id,admin_id,apply_status,medical_exam,sub_req FROM `sub_req` inner join account on account.acc_id = sub_req.acc_id INNER JOIN applyjob on applyjob.account_id = sub_req.acc_id";
$result = mysqli_query($conn,$sql);
echo '<table class="table table-sm table-borderless table-hover">
<thead class="table">
    <tr>
    <th scope="col">First Name</th>
    <th scope="col">Last Name</th>
    <th scope="col">Status</th>
    <th scope="col" colspan="2">Option</th>
    
    </tr>
</thead>
<tbody>'; 
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
       echo '<tr>                                
        <td>'.$row["firstname"].'</td>
        <td>'.$row["lastname"].'</td>
        <td style="color:red">'.$row["apply_status"].'</td>

        <div id="acceptTosubreq"></div>
        <input type="hidden" class="msgUser_name" value="">
        <input type="hidden" class="msgUser_id" value="'.$row["acc_id"].'">';
        // if($row["written_exam"] == 0){
        //     echo '<td><button type="button" class="btn-select" onclick="retakeP(this)" data-dismiss="modal">Retake</button></td>';
        // }else{
        //     echo '<td><button type="button" class="btn-select" style="background-color:gray" disabled="true" data-dismiss="modal">Retake</button></td>';
        // }
        // if($row["written_exam"] == 0){
        // echo '<td><button type="button" class="btn-select" onclick="passedWritten(this)" data-dismiss="modal">Passed</button></td>';
        // }else{
        // echo '<td><button type="button" class="btn-select" style="background-color:gray" disabled="true">Passed</button></td>';  
        // }
        // if($row["written_exam"] == 1){
        //     echo '<td><button type="button" class="btn-select" onclick="declineP(this)" data-dismiss="modal">Decline</button></td>';
        // }else{
        //     echo '<td><button type="button" class="btn-select" style="background-color:gray" disabled="true" data-dismiss="modal">Decline</button></td>';
        // }
       
        if($row["medical_exam"] == 1){
            echo '<td><button type="button" class="btn-select" onclick="proceedcon(this)" data-dismiss="modal">Done</button></td>';
        }else{
            echo '<td><button type="button" class="btn-select" style="background-color:gray" disabled="true" data-dismiss="modal">Done</button></td>';
        }
        echo '
        </tr>';
    }
}
echo '    
</tbody>
</table>';
        
    
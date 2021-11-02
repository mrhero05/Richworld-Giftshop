<?php
include "dbc.inc.php";
$id = $_POST["id"];

$sql = "SELECT account.firstname,account.lastname,account_id,job_id,apply_resume,apply_status,submit_resume,make_interview,initial_interview,make_written FROM `applyjob` inner join account on account.acc_id = applyjob.account_id WHERE job_id = '$id'";
$result = mysqli_query($conn,$sql);
echo '<table class="table table-sm table-borderless table-hover">
<thead class="table">
    <tr>
    <th scope="col">First Name</th>
    <th scope="col">Last Name</th>
    <th scope="col">Status</th>
    <th scope="col">Resume</th>
    <th scope="col" colspan="2">Job</th>
    
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
        <div id="downloaddiv"></div>
        <div id="review"></div>
        <div id="decline"></div>
        <div id="interviewdiv"></div>
        <input type="hidden" class="msgUser_name" value="">
        <input type="hidden" class="msgUser_id" value="'.$row["account_id"].'">
        <input type="hidden" class="jobid" value="'.$id.'">
        <td><a href="resume/'.$row["apply_resume"].'"><button type="button" class="btn-select" onclick="reviewResume(this)">Download</button></a></td>
        ';
        // if($row["submit_resume"] == 1 && $row["make_interview"] == 0){
        //     echo '<td><button type="button" class="btn-select" onclick="interviewB(this)" data-dismiss="modal">Interview</button></td>
        //     ';
        // }else{
        //     echo '<td><button type="button" class="btn-select" style="background-color:gray" onclick="interviewB(this)" data-dismiss="modal" disabled="true">Interview</button></td>
        // ';
        // }
        
        echo '<td><button type="button" class="btn-select" onclick="declineP(this)" data-dismiss="modal">Decline</button></td>
        ';
        if($row["submit_resume"] == 1 && $row["make_interview"] == 0){
        echo '<td><button type="button" class="btn-select" onclick="acceptP(this)" data-dismiss="modal">Accept</button></td>';
        }else{
        echo '<td><button type="button" class="btn-select" style="background-color:gray" onclick="acceptP(this)" disabled="true">Accept</button></td>';  
        }
        echo '
        </tr>';
    }
}
echo '    
</tbody>
</table>';
        
    
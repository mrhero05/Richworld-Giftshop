<?php
include "dbc.inc.php";
// $id = $_POST["id"];

$sql = "SELECT account.firstname,account.lastname,written_exam.acc_id,admin_id FROM `written_exam` inner join account on account.acc_id = written_exam.acc_id";
$result = mysqli_query($conn,$sql);
echo '<table class="table table-sm table-borderless table-hover">
<thead class="table">
    <tr>
    <th scope="col">First Name</th>
    <th scope="col">Last Name</th>
    <th scope="col">Status</th>
    <th scope="col">Resume</th>
    <th scope="col">Option</th>
    
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
        <input type="hidden" class="msgUser_name" value="">
        <input type="hidden" class="msgUser_id" value="'.$row["acc_id"].'">
        <td><button type="button" class="btn-select" onclick="selectP(this)">Download</button></td>
        ';
        if($row["apply_status"] == "pending"){
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
        
    
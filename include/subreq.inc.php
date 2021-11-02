<?php
include "dbc.inc.php";
// $id = $_POST["id"];

$sql = "SELECT account.firstname,account.lastname,sub_req.acc_id,sub_req.admin_id,apply_status FROM `sub_req` inner join account on account.acc_id = sub_req.acc_id INNER JOIN applyjob on applyjob.account_id = sub_req.acc_id";
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
        <div id="retake"></div>
        <input type="hidden" class="msgUser_name" value="'.$fullname.'">
        <input type="hidden" class="msgUser_id" value="'.$row["acc_id"].'">';
        
        
        if($row["make_written"] == 0){
            echo '<td><button type="button" class="btn-select" onclick="viewSubreq(this)" data-dismiss="modal" data-toggle="modal" data-target="#subreq1Apply">View</button></td>';
        }else{
            echo '<td><button type="button" class="btn-select" style="background-color:gray" disabled="true" data-dismiss="modal" >View</button></td>';
        }
        echo '
        </tr>';
    }
}
echo '    
</tbody>
</table>';
        
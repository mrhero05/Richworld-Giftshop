<?php
include "dbc.inc.php";
// $id = $_POST["id"];

$sql = "SELECT account.firstname,account.lastname,sub_req_view.acc_id,applyjob.apply_status,applyjob.sub_req,applyjob.contract_sign FROM `sub_req_view` inner join account on account.acc_id = sub_req_view.acc_id inner join applyjob on applyjob.account_id = sub_req_view.acc_id WHERE sss = 1 and pagibig = 1 and nbi = 1 and philhealth = 1 and medical = 1";
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

        <div id="acceptTodep"></div>
        <input type="hidden" class="msgUser_name" value="">
        <input type="hidden" class="msgUser_id" value="'.$row["acc_id"].'">';
       
        if($row["sub_req"] == 1 && $row["contract_sign"] == 0){
            echo '<td><button type="button" class="btn-select" onclick="proceeddep(this)" data-dismiss="modal">Done</button></td>';
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
        
    
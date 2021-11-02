<?php

include "dbc.inc.php";

$sql = "SELECT account.firstname,account.lastname,applyjob.job_id,applyjob.apply_status,job.job_name,final_sched.finsched_acc_id from final_sched INNER JOIN account on account.acc_id = final_sched.finsched_acc_id INNER JOIN applyjob on applyjob.account_id = final_sched.finsched_acc_id INNER JOIN job on job.job_id = applyjob.job_id";
$result = mysqli_query($conn,$sql);

echo '
<br>
<h1>Final Interview Schedule</h1>
<table class="table table-hover table-responsive table align-middle">
        <thead class="table-dark">
        <tr>
            <th scope="col">First name</th>
            <th scope="col">Last name</th>
            <th scope="col">Job</th>
            <th scope="col">Status</th>
            <th scope="col">Option</th>
            
        </tr>
        </thead>
        <tbody>
';
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
    $fullname = $row["firstname"]. " " .$row["lastname"];
        echo '
    <tr>
    <td>'.$row["firstname"].'</td>
    <td>'.$row["lastname"].'</td>
    <td>'.$row["job_name"].'</td>
    <td style="color:red">'.$row["apply_status"].'</td>
    <input type="hidden" class="id" value="'.$row["finsched_acc_id"].'">
    <input type="hidden" class="fullname" value="'.$fullname.'">
    <input type="hidden" class="job" value="'.$row["job_name"].'">
    
    <td><button type="button" class="btn btn-primary" onclick="finmodremarks(this)"  data-toggle="modal" data-target="#finmodal">Remarks</button></td>

    </tr>
        
    ';
    }
}
echo '</tbody>
</table>';
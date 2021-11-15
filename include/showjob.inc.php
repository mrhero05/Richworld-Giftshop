<?php

include 'dbc.inc.php';
$sql = "SELECT * from job";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo '
            <div class="job-div2">
            <input type="hidden" class="jobdetails_id" value="'.$row["job_id"].'">
                <h4>
                    '.$row["job_name"].'  
                </h4>
                <h6>$'.$row["job_salary_min"].' - $'.$row["job_salary_max"].'</h6>
                
                <span>no of submitted <strong>'.$row["job_applied"].'</strong></span>
                <p>no of hired/vacant '.$row["job_hired"].''."/".''.$row["job_vacant"].'</p>
                <br>
                <button type="button" data-toggle="modal" data-target="#acceptApply" onclick="jobdetails(this);">View Details</button>
            </div>
        ';
    }
}
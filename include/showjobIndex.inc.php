<?php
include 'dbc.inc.php';
$sql = "SELECT * from job";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo '
        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
            <div class="job-div2">
                <input type="hidden" class="indexjobid" value="'.$row["job_id"].'">
                <input type="hidden" class="indexjobname" value="'.$row["job_name"].'">
                <input type="hidden" class="indexjobmin" value="'.$row["job_salary_min"].'">
                <input type="hidden" class="indexjobmax" value="'.$row["job_salary_max"].'">
                <input type="hidden" class="indexjobdesc" value="'.$row["job_desc"].'">
                <h4>
                    '.$row["job_name"].'  
                </h4>
                <h6>$'.$row["job_salary_min"].' - $'.$row["job_salary_max"].'</h6>
                <span>no of submitted <strong>'.$row["job_applied"].'</strong></span>
                <br>
                <button type="button" onclick="viewjobIndex(this);" data-toggle="modal" data-target="#viewjobIndex">Learn more</button>
            </div>
            </div>
            
        ';
    }
}
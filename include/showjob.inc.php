<?php
include 'dbc.inc.php';

$sql = "SELECT * from job";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo '
        <div class="col-sm-12 col-lg-3">
            <div class="job-div">
                <h4>
                    '.$row["job_name"].'  
                </h4>
                <p>'.$row["job_desc"].'</p>
                <br>
                <button type="button" data-toggle="modal" data-target="#exampleModalCenter">Learn more</button>
            </div>
        </div>
        ';
    }
}
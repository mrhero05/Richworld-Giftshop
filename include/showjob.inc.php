<?php
$show = $_POST["job"];
if(isset($_POST["job"])){
include 'dbc.inc.php';
$sql = "SELECT * from job";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo '
            <div class="job-div2">
                <h4>
                    '.$row["job_name"].'  
                </h4>
                <h6>$'.$row["job_salary_min"].' - $'.$row["job_salary_max"].'</h6>
                <p>'.$row["job_desc"].'</p>
                <span>no of submitted</span>
                <br>
                <button type="button" data-toggle="modal" data-target="#exampleModalCenter">Learn more</button>
            </div>
        ';
    }
}
}else{
    echo "error";
}

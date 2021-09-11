<?php
include "dbc.inc.php";
if(isset($_POST["search_int"]) && !empty($_POST["search_int"])){
    $search = $_POST["search_int"];
    $sql = "SELECT * from job where job_name like '%$search%'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        echo '<div class="container">
        <div class="row">';
        while($row=mysqli_fetch_assoc($result)){
            echo '
            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="job-div2">
                    <input type="hidden" class="indexjobname" value="'.$row["job_name"].'">
                    <input type="hidden" class="indexjobmin" value="'.$row["job_salary_min"].'">
                    <input type="hidden" class="indexjobmax" value="'.$row["job_salary_max"].'">
                    <input type="hidden" class="indexjobdesc" value="'.$row["job_desc"].'">
                    <h4>
                        '.$row["job_name"].'  
                    </h4>
                    <h6>$'.$row["job_salary_min"].' - $'.$row["job_salary_max"].'</h6>
                    <span>no of submitted</span>
                    <br>
                    <button type="button" onclick="viewjobIndex(this);" data-toggle="modal" data-target="#viewjobIndex">Learn more</button>
                </div>
            </div>    
            ';
        }
        echo '</div></div>';
    }else{
        echo "No Result Found"; 
        exit();
    }
}else{
    echo "Please input your search";   
    exit();
}
<?php
session_start();
include "include/dbc.inc.php";
if($_SESSION["acc_type"] == "user"){
  header("location:index.php");
  exit();
}
include 'include/head.inc.php';
include 'include/nav.inc.php';
?>

<div class="col-lg-10">
    <div class="row">
        <div class="news-header">
            <h2>Activity Log</h2>
        </div>
        <div class="col-lg-11 ann-news">
            <h4>Log History</h4>
            <div class="table-responsive resultTbl" id="viewSearch">
                            <table class="table table-hover">
                                <thead class="table-dark">
                                    <tr>
                                    <th scope="col">Account Type</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Time</th>
                                    </tr>
                                </thead>
                              
                                <tbody>
                                    
                                   
            <?php 
            $sql = "SELECT account.acc_type,log_desc,log_time,log_date from activitylog inner join account on activitylog.admin_id = account.acc_id";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo '
                    <tr>                                
                    <td>'.$row["acc_type"].'</td>
                    <td>'.$row["log_desc"].'</td>
                    <td>'.$row["log_date"].'</td>
                    <td>'.$row["log_time"].'</td>
                    </tr>
                    ';
                }
            }
            ?>                    
                </tbody>  
                </table>
            </div>
        </div>
        
    </div>
</div>   
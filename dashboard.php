<?php
session_start();
if($_SESSION["acc_type"] == "user"){
  header("location:index.php");
  exit();
}
include 'include/head.inc.php';
include 'include/nav.inc.php';
include 'include/dbc.inc.php';
?>

        <div class="col-lg-10">
            <div class="row">
                <div class="col-lg-9 p-0">
                <!-- <div class="header">
                    <h1>Dashboard</h1>
                    </div> -->
                    <div class="employee-summary">
                        <!-- added <p> classes  -->
                        <p class="emp-title">Good Morning, <span><?php echo $_SESSION["profile-name"]?></span></p>
                        <p class="emp-des">Here's whats happening in your company today.</p>
                      
                            <div class="row">
                            <div class="col-sm-12 col-lg-4 bg-emp">
                            <?php 
                            $acc_type = $_SESSION["acc_type"];
                            if($acc_type == "admin"){
                                echo ' <a href="employee.php" style="text-decoration: none;color:black">';
                            }
                            ?>
                           
                            <p class="border-sum"><img src="img/act-emp.svg" alt="sample"><br><br> 
                            <?php 
                            $sql = "SELECT count(*) as empc from employee";
                            $result = mysqli_query($conn,$sql);
                            if(mysqli_num_rows($result) > 0){
                                $row = mysqli_fetch_assoc($result);
                                echo $row["empc"];
                            }
                            ?> Active Employees</p></a>
                            </div>
                            <div class="col-sm-12 col-lg-4 bg-emp">
                            <?php 
                            if($acc_type == "admin"){
                                echo '<a href="joblisting.php" style="text-decoration: none;color:black">';
                            }
                            ?>
                            <p class="border-sum"><img src="img/departments.svg" alt="sample"><br><br>
                            <?php 
                            $sql2 = "SELECT count(*) as jobd from job";
                            $result2 = mysqli_query($conn,$sql2);
                            if(mysqli_num_rows($result2) > 0){
                                $row = mysqli_fetch_assoc($result2);
                                echo $row["jobd"];
                            }
                            ?>
                            Available Job</p></a>
                            </div>
                            <div class="col-sm-12 col-lg-4 bg-emp">
                            <?php 
                            if($acc_type == "admin"){
                                echo '<a href="joblisting.php" style="text-decoration: none;color:black">';
                            }
                            ?>
                            
                            <p class="border-sum"><img src="img/notif.svg" alt="sample"><br><br>
                            <?php 
                            $sql1 = "SELECT count(*) as jobc from applyjob";
                            $result1 = mysqli_query($conn,$sql1);
                            if(mysqli_num_rows($result1) > 0){
                                $row1 = mysqli_fetch_assoc($result1);
                                echo $row1["jobc"];
                            }
                            ?>
                            New Application Request</p></a>
                            </div>
                            </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                        <div class="announce-div">
                        <div class="announce-title">
                                        <p>News/Announcements</p>
                                    </div>
                                <div class="announcement">

                                    <!-- /* post cards like twitter w/ hover */ -->
                                    <?php 
                                    $sqlnews = "SELECT account.prof_path,account.acc_type,fullname,title,ann_description,ann_time,ann_date from announcement INNER JOIN account on account.acc_id = announcement.admin_id";
                                    $resultn = mysqli_query($conn,$sqlnews);
                                    if(mysqli_num_rows($resultn) > 0){
                                        while($row = mysqli_fetch_assoc($resultn)){
                                            echo '<div class="post">
                                            <p class="post-name"><img src="img/account-profile/'.$row["prof_path"].'" alt="sadboi" width="50px">'.$row["fullname"].'<span>'.$row["ann_date"].'/'.$row["ann_time"].'</span></p>
                                             <p class="post-title">'.$row["title"].'</p>
                                             <p class="post-des">'.$row["ann_description"].'</p>
                                         </div>';
                                        }

                                    }
                                    ?>
                                        
                                        
                                </div>
                                </div>
                    </div>    
                        </div>
                </div>
                <div class="col-lg-3 p-0">
                        <div class="recentt">
                        <div class="recent">
                        <p class="recent-title">Recent Activities</p>
                        <p class="recent-des">Description <span>Time</span></p>
                        <table class="table table-hover">
                        <tbody>
                            <?php
                            $sqlrecent = "SELECT * from activitylog";
                            $resultr = mysqli_query($conn,$sqlrecent);
                            if(mysqli_num_rows($resultr) > 0){
                                while($row = mysqli_fetch_assoc($resultr)){
                                    echo '<tr><td><p style="float:left;width:50%">'.$row["log_desc"].'</p>
                                    <span style="float:right">'.$row["log_time"].'</span></td></tr>';
                                }
                            }
                            ?>
                        </tbody>
                        </table>
                        
                    </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

 </body>
</html>
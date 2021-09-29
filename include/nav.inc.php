<?php
include "dbc.inc.php";
session_start();
if(isset($_SESSION["profile-name"])){
$accid = $_SESSION["userId"];
$sql = "SELECT * from account where acc_id = '$accid'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result)){
    $_SESSION["refreshpath"] = $row["prof_path"];
}
}
}?>

<div class="container-fluid body">
    <div class="row top-nav"> 
            <div class="col-sm-12 col-lg-2">
                <div class="icon">
                    <!-- for icon -->
                    
                    <p>richworld<span>giftshop</span></p>
                </div>
            </div>
            <div class="col-sm-0 col-lg-4">
                <div class="time">
                <!-- for the time -->
                    <?php
                    echo date("h:i:sa");
                    ?>
                </div>
            </div>
            <div class="col-sm-0 col-lg-4">
                <div class="date">
                <!-- for date -->
                <?php
                echo date("m/d/Y");
                ?>
                </div>
            </div>
        <div class="col-sm-12 col-lg-2">
            <div class="account-dashboard">
                <div class="dropdown">       
                        <div class="btn-group">
                            <?php
                           $prof_name = "img/account-profile/".$_SESSION["refreshpath"];?>
                           <img src="<?php echo $prof_name;?>" class="profile_img" alt="profile">
                            
                            <p class="name" style="color:black"> <?php echo $_SESSION["profile-name"]?></p>
                        <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="../messages.php">Messages</a></li>
                            <li><a class="dropdown-item" href="#">TBD</a></li>
                            <li><a class="dropdown-item" href="#">TBD</a></li>
                            <li><a class="dropdown-item" href="#">TBD</a></li>
                            <li><a class="dropdown-item" href="#">TBD</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><form action="include/logout.inc.php" method="POST"><a class="dropdown-item"><button type="submit" name="logout">Log out</button></a></form></li>
                        </ul>
                        </div>
                </div>     
            </div>
        </div>
        
    </div>
    <div class="row">
        <div class="col-lg-2 p-0">
            <div class="left-nav">
                <section id="nav-bar">
                    <nav class="navbar navbar-expand-lg navbar-light nav-bg">
                      <div class="container-fluid">
                        <button class="navbar-toggler burger-menu" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">  
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                          <ul class="nav flex-column">
                                <li class="nav-item">
                                <a href="dashboard.php" style="text-decoration:none;">
                                <button type="button" style="margin-top:45px;"><img src="img/dashboard.svg" alt="dashboard icon"> Dashboard</button><br></a>
                                </li>   
                                <li class="nav-item">
                                <a href="company.php" style="text-decoration:none;">
                                    <button type="button"><img src="img/structure.svg" alt="dashboard icon"> Company</button><br></a>
                                </li>
                                <li class="nav-item">
                                <a href="employee.php" style="text-decoration:none;">
                                    <button type="button"><img src="img/employee.svg" alt="dashboard icon"> Employees</button><br></a>
                                </li>
                                <li class="nav-item">
                                <a href="joblisting.php" style="text-decoration:none;">
                                    <button type="button"><img src="img/job.svg" alt="dashboard icon"> Job Listings</button><br></a>
                                </li>
                                <li class="nav-item">
                                <a href="#project" style="text-decoration:none;">
                                    <button type="button"><img src="img/recent.svg" alt="dashboard icon"> Recent Activities</button><br></a>
                                </li>
                                <li class="nav-item">
                                <a href="announcement.php" style="text-decoration:none;">
                                    <button type="button"><img src="img/announcement.svg" alt="dashboard icon">Announcements</button><br></a>
                                </li>
                                <li class="nav-item">
                                <a href="requestleave.php" style="text-decoration:none;">
                                    <button type="button"><img src="img/leave.svg" alt="dashboard icon"> Request leave</button><br></a>
                                </li>
                          </ul>
                        </div>
                      </div>
                    </nav>
                </section>
            </div>
        </div>
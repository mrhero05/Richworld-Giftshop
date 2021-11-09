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

<div class="container-fluid p-0 body">
    <div class="row top-nav m-0"> 
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
                            <?php echo '<li><p class="dropdown-item" style="color:red;margin-left:3%">Account : <span style="color:green">'.$_SESSION["acc_type"].'<span></p></li>';?>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="messages.php">Messages</a></li>
                            <?php
                            if($_SESSION["acc_type"] == "hrmanager" || $_SESSION["acc_type"] == "department"){
                                echo '
                            <li><a class="dropdown-item" href="notification.php">Notification</a></li>';
                            }
                            if($_SESSION["acc_type"] == "admin"){
                                echo '<li><a class="dropdown-item" style="cursor:pointer" data-toggle="modal" data-target="#createmodal">Create Account</a></li>';
                            }
                            ?>
                            <li><a class="dropdown-item" href="#">TBD</a></li>
                            <li><a class="dropdown-item" href="#">TBD</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><form action="include/logout.inc.php" method="POST"><a class="dropdown-item"><button type="submit" name="logout" style="color:red">Log out</button></a></form></li>
                        </ul>
                        </div>
                </div>     
            </div>
        </div>


        <!-- start modal create new account admin side -->
    <form action="include/register.inc.php" method="POST">
    <div class="modal fade" id="createmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-titles" id="exampleModalLongTitle">Create New Account</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body account-body">
            <div class="account-info">
            <select class="form-select" aria-label="Default select example" name="type">
                    <option>Account type</option>
                    <option value="hrmanager">HR Manager</option>
                    <option value="hrrecruiter">HR Recruiter</option>
                    <option value="department">Department Manager</option>
            </select>
                <label for="firstname">First Name</label>
                <input class="form-control" type="text" id="firstname" name="fname" required>
                

                <label for="lastname">Last Name</label>
                <input class="form-control" type="text" id="lastname" name="lname" required>
                
                <label for="lastname">Contact</label>
                <input class="form-control" type="text" id="lastname" name="contact" required>

                <label for="username">Username</label>
                <script src="js/script.js?v=<?php echo time(); ?>"></script>
                <input class="form-control" type="text" name="uname" id="username" onchange="checkuser(this.value);" required>
                <div id="cuser" style="padding-left: 7%;"><p style="color: cornflowerblue;">Check username availability</p>
                </div>
                <label for="password">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="pass" required>
                
                <label for="retype">Retype Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="pass2" required>
            </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit">Create Account</button>
        </div> 
        </div>
    </div>
    </div>
    </form>
        <!-- end modal create new account admin side -->
        
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
                                <?php
                                $type = $_SESSION["acc_type"];
                                if($type == "hrmanager"){
                                    echo ' 
                                    <li class="nav-item">
                                    <a href="hrmanager.php" style="text-decoration:none;">
                                        <button type="button"><img src="img/structure.svg" alt="dashboard icon">HR Manager</button><br></a>
                                    </li>
                                    <li class="nav-item">
                                    <a href="announcement.php" style="text-decoration:none;">
                                        <button type="button"><img src="img/announcement.svg" alt="dashboard icon">Announcements</button><br></a>
                                    </li>
                                    ';
                                }else if ($type == "department"){
                                    echo '
                                    <li class="nav-item"> 
                                    <a href="depmanager.php" style="text-decoration:none;">
                                        <button type="button"><img src="img/structure.svg" alt="dashboard icon"> Department Manager</button><br></a>
                                    </li>
                                    <li class="nav-item">
                                    <a href="employee.php" style="text-decoration:none;">
                                        <button type="button"><img src="img/employee.svg" alt="dashboard icon"> Employees</button><br></a>
                                    </li>
                                    <li class="nav-item">
                                    <a href="announcement.php" style="text-decoration:none;">
                                        <button type="button"><img src="img/announcement.svg" alt="dashboard icon">Announcements</button><br></a>
                                    </li>
                                    '
                                    ;
                                }else if($type == "hrrecruiter"){
                                    echo '<li class="nav-item">
                                    <a href="joblisting.php" style="text-decoration:none;">
                                        <button type="button"><img src="img/job.svg" alt="dashboard icon"> Job Listings</button><br></a>
                                    </li>
                                    <li class="nav-item">
                                    <a href="announcement.php" style="text-decoration:none;">
                                        <button type="button"><img src="img/announcement.svg" alt="dashboard icon">Announcements</button><br></a>
                                    </li>
                                    '
                                    
                                    ;
                                }else if($type == "admin"){
                                    echo '
                                    <li class="nav-item">
                                    <a href="hrmanager.php" style="text-decoration:none;">
                                        <button type="button"><img src="img/structure.svg" alt="dashboard icon">HR Manager</button><br></a>
                                    </li>
                                    <li class="nav-item"> 
                                    <a href="depmanager.php" style="text-decoration:none;">
                                        <button type="button"><img src="img/structure.svg" alt="dashboard icon"> Department Manager</button><br></a>
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
                                    <a href="announcement.php" style="text-decoration:none;">
                                        <button type="button"><img src="img/announcement.svg" alt="dashboard icon">Announcements</button><br></a>
                                    </li>
                                    <li class="nav-item">
                                    <a href="activitylog.php" style="text-decoration:none;">
                                        <button type="button"><img src="img/announcement.svg" alt="dashboard icon">Activity Log</button><br></a>
                                    </li>';
                                }      
                                ?> 
                          </ul>
                        </div>
                      </div>
                    </nav>
                </section>
            </div>
        </div>
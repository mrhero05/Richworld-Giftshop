<?php
include 'include/head.inc.php';
include 'include/dbc.inc.php';
?>

</body>
</html>
<nav class="navbar navbar-expand-lg navbar-light" id="nav_index">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><p>R<span>G</span></p></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        
      <li class="nav-item">
            <a class="nav-link active"aria-current="page" href="index.php#nav-body">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php#download">Download</a>
            </li>
            <li class="nav-item">
            <script src="js/script.js?v=<?php echo time(); ?>"></script>
            <a class="nav-link active" aria-current="page" href="job.php" style="margin-right:20px">Job Listing</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php#about" style="margin-right:20px">About</a>
            </li>   
      <li class="nav-item">
            <?php
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
              echo '<div class="account-dashboard">
              <div class="dropdown">       
                      <div class="btn-group">';
                          
                          $prof_name = "img/account-profile/".$_SESSION["refreshpath"];?>
                          <img src="<?php echo $prof_name;?>" class="profile_img" alt="profile">
                          <?php
                          echo '<p class="name">'.$_SESSION["profile-name"].'</p>';
                      echo '<button type="button" style="background-color:#FD5757 !important" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                          <span class="visually-hidden">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Settings</a></li>
                          <li><a class="dropdown-item" href="messages.php">Messages</a></li>
                          <li><a class="dropdown-item" href="status.php">Status</a></li>
                          <li><a class="dropdown-item" href="#">TBD</a></li>
                          <li><a class="dropdown-item" href="#">TBD</a></li>
                          <li><a class="dropdown-item" href="#">TBD</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><form action="include/logout.inc.php" method="POST"><a class="dropdown-item"><button type="submit" name="logout">Log out</button></a></form></li>
                      </ul>
                      </div>
              </div>     
              </div>';
            }else{
            echo '<a href="login.php"><button type="button" class="nav-login">Login</button></a>';}?>
            </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <div class="row">
        <div class="step-header">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h2>Application Status</h2>
                <p>Your latest progress will be shown here</p>
            </div>
        </div>
    </div>
    
    <div class="row">
    <div class="step-progress">
        <div class="col-sm-12 col-md-12 col-lg-12 p-0">
            <div class="status-parent">
                <div class="child-status">
                <?php 
                    include "include/dbc.inc.php";
                    $sql = "SELECT * from applyjob where account_id = '$accid'";
                    $result = mysqli_query($conn,$sql);
                    $rsub = 0;
                    $makeInt = 0;
                    $iniInt = 0;
                    $written = 0;
                    $finalInt = 0;
                    $medical = 0;
                    $subreq = 0;

                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                        $rsub = $row["submit_resume"];
                        $makeInt = $row["make_interview"];
                        $iniInt = $row["initial_interview"];
                        $written = $row["written_exam"];
                        $finalInt = $row["final_interview"];
                        $medical = $row["medical_exam"];
                        $subreq = $row["sub_req"];
                        }
                    }
                ?>
                    <ul>
                        <li>
                            <h5><img src="img/index_icon/Circle.svg" alt="">Resume submitted</h5>
                                <p>12/21/12</p>
                                <p>11:11PM</p>
                        </li>
                        <li>
                            <?php 
                            if($rsub == 1){
                                echo '<h5><img src="img/index_icon/Circle.svg" alt="">Resume reviewed</h5>
                                <p>12/21/12</p>
                                <p>11:11PM</p>';
                            }else{
                                echo '
                                <h5><img src="img/index_icon/Circled.svg" alt="">Resume reviewed</h5>
                                <p>12/21/12</p>
                                <p>11:11PM</p>';
                            } 
                            ?>
                        </li>
                        <li>
                        <?php 
                            if($makeInt == 1){
                                echo '<h5><img src="img/index_icon/Circle.svg" alt="">Schedule for interview</h5>
                                <p>Wait for HR officer to schedule your interview. You will notified via email or messages</p>';
                            }else{
                                echo '
                                <h5><img src="img/index_icon/Circled.svg" alt="">Schedule for interview</h5>
                            <p>Wait for HR officer to schedule your interview. You will notified via email or messages</p>';
                            } 
                            ?>
                            
                        </li>
                        <li>
                            <?php 
                            if($iniInt == 1){
                                echo '<h5><img src="img/index_icon/Circle.svg" alt="">Initial interview</h5>
                                <p>12/21/12</p>
                                <p>11:11PM</p>';
                            }else{
                                echo '
                                <h5><img src="img/index_icon/Circled.svg" alt="">Initial interview</h5>
                                <p>12/21/12</p>
                                <p>11:11PM</p>';
                            } 
                            ?>
                        </li>
                        <li>
                            <?php 
                            if($written == 1){
                                echo '<h5><img src="img/index_icon/Circle.svg" alt="">Written Exam</h5>
                                <p>12/21/12</p>
                                <p>11:11PM</p>';
                            }else{
                                echo '
                                <h5><img src="img/index_icon/Circled.svg" alt="">Written Exam</h5>
                            <p>12/21/12</p>
                            <p>11:11PM</p>';
                            } 
                            ?>
                            
                        </li>
                        <li>
                            <?php 
                            if($finalInt == 1){
                                echo '<h5><img src="img/index_icon/Circle.svg" alt="">Final interview</h5>
                                <p>12/21/12</p>
                                <p>11:11PM</p>';
                            }else{
                                echo '
                                <h5><img src="img/index_icon/Circled.svg" alt="">Final interview</h5>
                                <p>12/21/12</p>
                                <p>11:11PM</p>';
                            } 
                            ?>
                            
                        </li>
                        <li>
                            <?php 
                            if($medical == 1){
                                echo '<h5><img src="img/index_icon/Circle.svg" alt="">Medical Exam</h5>
                                <p>12/21/12</p>
                                <p>11:11PM</p>';
                            }else{
                                echo '
                                <h5><img src="img/index_icon/Circled.svg" alt="">Medical Exam</h5>
                            <p>12/21/12</p>
                            <p>11:11PM</p>';
                            } 
                            ?>
                            
                        </li>
                        <li>
                            <?php 
                            if($subreq == 1){
                                echo '<h5><img src="img/index_icon/Circle.svg" alt="">Submission of requirements</h5>
                                <p>12/21/12</p>
                                <p>11:11PM</p>';
                            }else{
                                echo '
                                <h5><img src="img/index_icon/Circled.svg" alt="">Submission of requirements</h5>
                            <p>12/21/12</p>
                            <p>11:11PM</p>';
                            } 
                            ?>
                            
                        </li>
                        <li>
                            <h5><img src="img/index_icon/Circled.svg" alt="">Contract Signing</h5>
                            <p>12/21/12</p>
                            <p>11:11PM</p>
                        </li>
                        <li>
                            <h5><img src="img/index_icon/Circled.svg" alt="">Deployment</h5>
                            <p>12/21/12</p>
                            <p>11:11PM</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
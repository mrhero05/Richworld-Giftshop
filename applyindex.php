<?php
session_start();
if(!isset($_POST["applyB"]) || !isset($_SESSION["profile-name"])){
  header("location:job.php");
  exit();
}
$job_id = $_POST["job_id"];
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
                          <li><a class="dropdown-item" href="#">TBD</a></li>
                          <li><a class="dropdown-item" href="#">TBD</a></li>
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

<section id="apply-body">
  <form action="include/applyresume.inc.php" method="POST" enctype="multipart/form-data">
    <div class="apply">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-lg-12">
                <div class="apply-div">
                    <h1>Let's get started</h1>
                    <br>
                    <p> Upload your file and you will be notified once we've reviewed it. You can also<br>
                    check you application status in the settings.</p>
                    <br>
                    <div class="choosefile" style="margin: 2%;">
                       
                    <input class="form-control form-control" id="formFile" type="file" name="resume">
                    </div>
                    <br>
                    <input type="hidden" name="applyjob_id" value="<?php echo $job_id;?>">
                    <input type="hidden" name="applyacc_id" value="<?php echo $accid;?>">
                    
                    <div class="container">
                      <div class="row">
                          <div class="col-sm-12 col-lg-6"> 
                          <button type="button" class="back-button">Back</button>
                          </div>
                          <div class="col-sm-12 col-lg-6">
                          <button type="submit" class="submit-button" name="applysubmit">Submit </button>
                          
                          </div>
                      </div>
                    </div>
                       
                </div>
              </div>
            </div>
          </div>
    </div> 
  </form>
</section>
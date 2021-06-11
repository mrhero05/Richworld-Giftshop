<?php
include 'include/head.inc.php';
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
            <a class="nav-link active" aria-current="page" href="job.php" style="margin-right:20px">Job Listing</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php#about" style="margin-right:20px">About</a>
            </li>
            <li class="nav-item">
            <a href="login.php"><button type="button" class="nav-login">Login</button></a>
            </li>   
      </ul>
    </div>
  </div>
</nav>

<section id="job-body">
    <div class="job">
        <div class="container">
            <div class="row">
                <h1>Job Vacancies</h1>
                <?php include "include/showjob.inc.php";?> 
                
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Company Structure</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h5>Semi Truck Driver</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
                        
                        </div>
                        <div class="modal-footer">
                            
                            <button type="button" class="btn btn-primary">Apply Now</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
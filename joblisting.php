<?php
include 'include/head.inc.php';
include 'include/nav.inc.php';
?>
<div class="col-lg-10">
    <div class="container">
        <div class="job-title">
            <div class="row">
                <div class="col-lg-6">
                <h3>Job Listings</h3>
                </div>
                <div class="col-lg-3">
               
                    <button type="button" id="job-button" onclick="showjob();">Show All Job</button>
                </div>
                <div class="col-lg-3">
                <button type="button" data-toggle="modal" data-target="#createmeet"><br>Setup a meeting</button>
                </div>
            </div>
        </div>
            <div class="row">
                <div class="title-job" id="jobcount">
                <h2>Showing 3 Jobs</h2>
                </div>
                <div class="col-sm-12 col-lg-9">
                
                        <div id="job-list">
                            <!-- <div class="job-div2"> -->
                                    <?php
                                    include 'include/dbc.inc.php';
                                    $sql = "SELECT * from job limit 3";
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
                                    }?>
                            <!-- </div> -->
                        </div>  
                        
                </div>
                <div class="col-sm-12 col-lg-3">
                    <div class="createjob">
                        <!-- <button type="button">&#10133; <br> Create New</button> -->
                        <button type="button" data-toggle="modal" data-target="#createnew"><br>Create New</button>
                            
                    </div>
                    <!-- modal for adding new job -->
                    <div class="modal fade" id="createnew" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Add Job Vacancies</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid p-0">
                                                    <div class="row">
                                                    <div class="col-12">
                                                    <input type="text" class="form-control" placeholder="Job Title:" id="jtitle"></div>
                                                    <div class="col-sm-12 col-lg-6">
                                                    <input type="text" class="form-control" placeholder="Job Salary min:" id="jsalarymin"></div> 
                                                    <div class="col-sm-12 col-lg-6">
                                                    <input type="text" class="form-control" placeholder="Job Salary max:" id="jsalarymax"></div> 
                                                    <div class="col-sm-12 col-lg-12">
                                                    <input type="text" class="form-control" placeholder="How many vacant:" id="jvacant"></div>  
                                                    <br><br><br>
                                                    <div class="col-sm-12 col-lg-12">
                                                    <label for="jobdesc">Job Description</label>
                                                    <textarea class="form-control" id="jobdesc" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                                                <button type="button" class="jobbuttonpost" id="bjob" onclick="addjob()">Post</button>
                                                <div id="addjob-div"></div>
                                            </div>
                                        </div>
                                    </div>
                    </div>

                    
                </div>
            </div>
    </div>
</div>


<!-- start modal create meet -->
<div class="modal fade" id="createmeet" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content">
     <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLongTitle">Set-up a meeting</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
         </button>
     </div>
     <div class="modal-body">
         <h3 style="text-align: center;">Interview</h3>
        <h5>Set Date/Time :</h5>
        <input type="date"><input type="time"> <button type="button">Clear</button>
        <h5>To : <input type="search" id="searchMeet" list="searchlist" onkeypress="searchMeet();"></h5>
       <datalist id="searchlist">
        <div id="searchOption">
        </div>
       </datalist>
  
          
        
        <div class="addInterview">
            
            <p>Ogie Sanchez <span><button type="button">✖</button></span></p>
            <p>Ogie  <span><button type="button">✖</button></span></p>
            <p>Ogie Sanchez <span><button type="button">✖</button></span></p>
            <p>Ogie Sanchez <span><button type="button">✖</button></span></p>
            <p>Ogie Sanchez <span><button type="button">✖</button></span></p>
            
        </div>
        <h5>Meeting Link :</h5>
            <input type="text" class="meetlink" placeholder="Paste here the meeting link">
            <h5>Message :</h5>
            <textarea class="form-control" rows="3"></textarea>

     </div>
     <div class="modal-footer">
         <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
         <button type="button" class="btn btn-primary" onclick="addEmp()" style="width:100%">Send Invite</button>
         <div id="add"></div>
     </div>
     </div>
 </div>
</div>
    <!-- end modal create meet -->




    <script src="js/script.js?v=<?php echo time(); ?>"></script>
   
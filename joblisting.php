<?php
session_start();
if($_SESSION["acc_type"] == "user"){
  header("location:index.php");
  exit();
}
include 'include/head.inc.php';
include 'include/nav.inc.php';
if(isset($_GET["error"])){
    if($_GET["error"] == "error"){
        echo '<script>alert("There was an error");</script>';
    }
}
if(isset($_GET["success"])){
    if($_GET["success"] == "sendsuccess"){
        echo '<script>alert("Send Meeting Successfully!");</script>';
    }
}
?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<div class="col-lg-10 jobfix">
    <div class="container">
        <div class="job-title">
            <div class="listing">
                <h3 style="color: #FD5757;">Scheduling</h3>
                <div class="col-lg-2">
                        <button type="button" data-toggle="modal" data-target="#initialApply" onclick="initialInt();">Initial Interview</button>
                </div>
                <div class="col-lg-2">
                        <button type="button" data-toggle="modal" data-target="#writtenApply1" onclick="writtenExam();">Written Exam</button>
                </div>
                <div class="col-lg-2">
                        <button type="button" data-toggle="modal" data-target="#finalApply" onclick="finalInt();">Final Interview</button>
                </div>
            </div>
        </div> 

        <div class="job-title">
            <div class="row">
                <div class="listings">
                    <div class="col-lg-2">
                        <button type="button" id="job-button" onclick="showjob();">Show All Job</button>
                    </div>
                    <div class="col-lg-2">
                        <button type="button" data-toggle="modal" data-target="#subreqApply" onclick="subreq();">Requirements</button>
                    </div>
                    <div class="col-lg-2">
                        <button type="button" data-toggle="modal" data-target="#contractApply" onclick="contract();">Contract</button>
                    </div>
                    <!-- <div class="col-lg-2">
                    <button type="button" data-toggle="modal" data-target="#createmeet">Setup a meeting</button>
                    </div> -->
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
                                                    <input type="hidden" class="jobdetails_id" value="'.$row["job_id"].'">
                                                    <h4>
                                                        '.$row["job_name"].'  
                                                    </h4>
                                                    <h6>$'.$row["job_salary_min"].' - $'.$row["job_salary_max"].'</h6>
                                                    
                                                    <span>no of submitted <strong>'.$row["job_applied"].'</strong></span>
                                                    <p>no of hired/vacant '.$row["job_hired"].''."/".''.$row["job_vacant"].'</p>
                                                    <br>
                                                    <button type="button" data-toggle="modal" data-target="#acceptApply" onclick="jobdetails(this);">View Details</button>                         
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
         <h5 class="modal-titles" id="exampleModalLongTitle">Set-up a meeting</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
         </button>
     </div>
     <div class="modal-body">
         <!-- <input type="search" placeholder="Type any name here..." class="modalinput" id="searchMeet" oninput="searchMeet();"> -->
         <form action="include/setupmeet.inc.php" method="POST">
        <div id="peopleS"></div>
        <div class="addInterview" id="addInterview">
            <p class="peopleSp"></p>
            <input type="hidden" class="peopleSname" value="" name="name">
            <input type="hidden" class="peopleSid" value="" name="id">
        </div>
        <br>
        <!-- <div class="radioInterview">
        <p><input type="radio" name="radioI" value="initial" id="1"> Initial Interview &nbsp;</p>
        <p><input type="radio" name="radioI" value="written" id="2"> Written Exam &nbsp;</p>
        <p><input type="radio" name="radioI" value="final" id="3"> Final Interview </p>
        </div> -->
        <div id="checkdate">
            
        </div>
            <input type="text" class="meetlink" placeholder="Paste your meeting link here..." name="link">
            <h6 class="message-md">Message:</h6>
            <textarea class="form-control" rows="3" name="meet_msg"></textarea>

     </div>
     <div class="modal-footer">
         <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
         <button type="submit" class="btn btn-primary" style="width:100%">Send Invite</button>
     </div>
     </div>
 </div>
</div>
</form>
<!-- end modal create meet -->

<!-- start modal create written sched -->

<div class="modal fade" id="createwritten" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content">
     <div class="modal-header">
         <h5 class="modal-titles" id="exampleModalLongTitle">Set-up a written schedule</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
         </button>
     </div>
     <div class="modal-body">
         <!-- <input type="search" placeholder="Type any name here..." class="modalinput" id="searchMeet" oninput="searchMeet();"> -->
         <form action="include/setupwritten.inc.php" method="POST">
        <div id="peopleS"></div>
        <div class="addInterview" id="addInterview">
            <p class="peopleSp"></p>
            <input type="hidden" class="peopleSname" value="" name="name">
            <input type="hidden" class="peopleSid" value="" name="id">
        </div>
        <br>
        <!-- <div class="radioInterview">
        <p><input type="radio" name="radioI" value="initial" id="1"> Initial Interview &nbsp;</p>
        <p><input type="radio" name="radioI" value="written" id="2"> Written Exam &nbsp;</p>
        <p><input type="radio" name="radioI" value="final" id="3"> Final Interview </p>
        </div> -->
        <div id="checkdatewritten">
            
        </div>
            <input type="text" class="meetlink" placeholder="Paste your written exam form here..." name="link">
            <h6 class="message-md">Message:</h6>
            <textarea class="form-control" rows="3" name="meet_msg"></textarea>

     </div>
     <div class="modal-footer">
         <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
         <button type="submit" class="btn btn-primary" style="width:100%">Send Invite</button>
     </div>
     </div>
 </div>
</div>
</form>
<!-- end modal create written sched -->

<!-- start modal written exam -->

<!-- <div class="modal fade" id="writtenApply1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content">
     <div class="modal-header">
         <h5 class="modal-titles" id="exampleModalLongTitle">List of user take written exam</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
         </button>
     </div>
     <div class="modal-body">
     <div class="table-responsive" id="writtenTbl">       
     </div>
     
     </div>
 </div>
</div> -->
    <!-- end modal written exam -->   

<!-- start modal written applicant -->

<div class="modal fade" id="writtenApply1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content">
     <div class="modal-header">
         <h5 class="modal-titles" id="exampleModalLongTitle">List of user take written exam</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
         </button>
     </div>
     <div class="modal-body">
     <div class="table-responsive" id="writtenTbl">       
     </div>
     </div>
     <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <button type="submit" class="btn btn-primary" style="width:100%">Save Changes</button>
     </div>  -->
     </div>
 </div>
</div>
    <!-- end modal written applicant -->

<!-- start modal final meet -->

<div class="modal fade" id="createfinal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content">
     <div class="modal-header">
         <h5 class="modal-titles" id="exampleModalLongTitle">Set-up a meeting for final interview</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
         </button>
     </div>
     <div class="modal-body">
         <!-- <input type="search" placeholder="Type any name here..." class="modalinput" id="searchMeet" oninput="searchMeet();"> -->
         <form action="include/setupfinal.inc.php" method="POST">
        <div id="peopleS"></div>
        <div class="addInterview" id="addInterview">
            <p class="peopleSp"></p>
            <input type="hidden" class="peopleSname" value="" name="name">
            <input type="hidden" class="peopleSid" value="" name="id">
        </div>
        <br>
        <!-- <div class="radioInterview">
        <p><input type="radio" name="radioI" value="initial" id="1"> Initial Interview &nbsp;</p>
        <p><input type="radio" name="radioI" value="written" id="2"> Written Exam &nbsp;</p>
        <p><input type="radio" name="radioI" value="final" id="3"> Final Interview </p>
        </div> -->
        <div id="checkdatefinal">
            
        </div>
            <input type="text" class="meetlink" placeholder="Paste your meeting link here..." name="link">
            <h6 class="message-md">Message:</h6>
            <textarea class="form-control" rows="3" name="meet_msg"></textarea>

     </div>
     <div class="modal-footer">
         <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
         <button type="submit" class="btn btn-primary" style="width:100%">Send Invite</button>
     </div>
     </div>
 </div>
</div>
</form>
<!-- end modal final meet -->

<!-- start modal accept applicant -->

<div class="modal fade" id="acceptApply" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content">
     <div class="modal-header">
         <h5 class="modal-titles" id="exampleModalLongTitle">List of user applying for this job</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
         </button>
     </div>
     <div class="modal-body">
     <div class="table-responsive" id="peopleTbl">       
     </div>
     </div>
     <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <button type="submit" class="btn btn-primary" style="width:100%">Save Changes</button>
     </div>  -->
     </div>
 </div>
</div>
    <!-- end modal accept applicant -->

 <!-- start modal submission requirements -->

 <div class="modal fade" id="subreqApply" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content">
     <div class="modal-header">
         <h5 class="modal-titles" id="exampleModalLongTitle">List of user submission of requirements</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
         </button>
     </div>
     <div class="modal-body">
     <div class="table-responsive" id="subreqTbl">       
     </div>
     </div>
     <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <button type="submit" class="btn btn-primary" style="width:100%">Save Changes</button>
     </div>  -->
     </div>
 </div>
</div>
    <!-- end modal submission requirements -->

    <!-- start initial interview -->

<div class="modal fade" id="initialApply" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content">
     <div class="modal-header">
         <h5 class="modal-titles" id="exampleModalLongTitle">List of user accept to initial interview</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
         </button>
     </div>
     <div class="modal-body">
     <div class="table-responsive" id="initialTbl"></div>
     </div>
     <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <button type="submit" class="btn btn-primary" style="width:100%">Save Changes</button>
     </div>  -->
     </div>
 </div>
</div>
    <!-- end modal initial interview-->

      <!-- start final interview -->

<div class="modal fade" id="finalApply" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content">
     <div class="modal-header">
         <h5 class="modal-titles" id="exampleModalLongTitle">List of user accept to Final interview</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
         </button>
     </div>
     <div class="modal-body">
     <div class="table-responsive" id="finalTbl"></div>
     </div>
     <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <button type="submit" class="btn btn-primary" style="width:100%">Save Changes</button>
     </div>  -->
     </div>
 </div>
</div>
    <!-- end modal final interview-->


<!-- start modal contract -->

<div class="modal fade" id="contractApply" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-titles" id="exampleModalLongTitle">List of user in contract signing</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <div class="table-responsive" id="contractTbl">       
        </div>
        </div>
        <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" style="width:100%">Save Changes</button>
        </div>  -->
        </div>
    </div>
</div>
<!-- end modal contract exam -->

<!-- start modal subrec check -->

<div class="modal fade" id="subreq1Apply" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content">
     <div class="modal-header">
         <h5 class="modal-titles" id="exampleModalLongTitle">Overview of requirements</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
         </button>
     </div>
     <div class="modal-body">
         <form action="include/subreqChanges.inc.php" method="POST">
     <div class="table-responsive" id="req1Tbl">       
     </div>
     <div class="modal-footer">
            <button type="submit" class="btn btn-primary" style="width:100%">Save Changes</button>
        </div> 
         </form>
     </div>
 </div>
</div>
    <!-- end modal subrec check -->    

 


    <script src="js/script.js?v=<?php echo time(); ?>"></script>
   
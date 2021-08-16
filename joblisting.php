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
            <script src="js/script.js?v=<?php echo time(); ?>"></script>
                <button type="button" id="job-button" onclick="showjob();">Show All candidates</button>
            </div>
            <div class="col-lg-3">
                <button type="button">Setup a meeting</button>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="title-job">
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
                                            <h6>$10,000 - $15,000</h6>
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
                                        <input type="text" class="form-control" placeholder="Salary:" id="jsalary"></div> 
                                        <div class="col-sm-12 col-lg-6">
                                        <input type="text" class="form-control" placeholder="How many vacant:" id="jvacant"></div>  
                                        <div class="col-sm-12 col-lg-12">
                                        <label for="jobdesc">Job Description</label>
                                        <textarea class="form-control" id="jobdesc" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" id="bjob" onclick="addjob()">Save Job</button>
                                        <div id="addjob-div"></div>
                                    </div>
                                    </div>
                                </div>
                            </div>
            </div>
        </div>
    </div>
</div>
            
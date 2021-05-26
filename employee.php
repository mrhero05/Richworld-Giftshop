<?php
include 'include/head.inc.php';
include 'include/nav.inc.php';
?>
<div class="col-sm-12 col-lg-10">
    <div class="employee">
        <div class="row">
            <div class="col-lg-12">
                <p class="emplo-title">Employees</p>
                <div class="row">
                    <!-- for employee view  -->
                    <div class="col-lg-12">
                        <div class="employee-container">
                                <script src="js/script.js?v=<?php echo time(); ?>"></script>
                                <input type="text" placeholder="Type something here..." class="searchbtn" id="searchInp">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input searchR" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="acc_id">
                                <label class="form-check-label" for="inlineRadio1">ID</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input searchR" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="firstname">
                                <label class="form-check-label" for="inlineRadio2">First name</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input searchR" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="lastname">
                                <label class="form-check-label" for="inlineRadio2">Last name</label>
                                </div>
                                
                                <button type="button" class="searchGo" name="search" onclick="search()">Search</button>
                                <button type="button" class="addGo">Add</button>
                                <button type="button" class="updateGo">Update</button>
                                <button type="button" class="viewGo" onclick="viewAll()">View All</button>
                          
                        </div>
                    <!-- for table employee -->
                        <div class="table-responsive resultTbl" id="viewSearch">
                            <table class="table table-hover">
                                <thead class="table-dark">
                                    <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">First name</th>
                                    <th scope="col">Last name</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Civil Status</th>
                                    <th scope="col">Contact #</th>
                                    <th scope="col">Email address</th>
                                    <th scope="col">Job title</th>
                                    <th scope="col">Employment</th>
                                    </tr>
                                </thead>
                              
                                <tbody>
                                    
                                    <tr>                                
                                    <td> </td>
                                    </tr>
                                    
                                </tbody>
                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
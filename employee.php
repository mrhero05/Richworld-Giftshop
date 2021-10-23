<?php
session_start();
if($_SESSION["acc_type"] == "user"){
  header("location:index.php");
  exit();
}
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
                                <figcaption class="figure-caption text-right">*Select one of the options first to search*</figcaption>
                                    <div class="emp-ri">
                                        <div class="form-check form-check-inline">
                                        <input class="form-check-input searchR" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="emp_id">
                                        <label class="form-check-label" for="inlineRadio1">ID</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                        <input class="form-check-input searchR" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="emp_fname">
                                        <label class="form-check-label" for="inlineRadio2">First name</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                        <input class="form-check-input searchR" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="emp_lname">
                                        <label class="form-check-label" for="inlineRadio2">Last name</label>
                                        </div>
                                    </div>
                                
                                <div class="emp-button">
                                <button type="button" class="searchGo" name="search" onclick="search()">Search</button>
                                <button type="button" class="addGo" data-toggle="modal" data-target="#exampleModalCenter">Add</button>
                            <!-- modal for add employee -->
                            
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Add Employee</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid p-0">
                                        <div class="row">
                                        <!-- <div class="col-12">
                                        <input type="text" class="form-control" placeholder="ID"></div> -->
                                        <div class="col-sm-12 col-lg-4">
                                        <input type="text" class="form-control" placeholder="Firstname" id="fname"></div> 
                                        <div class="col-sm-12 col-lg-4">
                                        <input type="text" class="form-control" placeholder="Lastname" id="lname"></div>
                                        <div class="col-sm-12 col-lg-4">
                                        <input type="text" class="form-control" placeholder="Age" id="age"></div>
                                        <div class="col-sm-12 col-lg-6">
                                        <input type="text" class="form-control" placeholder="Email" id="email"></div>
                                        <div class="col-sm-12 col-lg-6">
                                        <input type="text" class="form-control" placeholder="Gender" id="gender"></div>
                                        <div class="col-sm-12 col-lg-6">
                                        <input type="text" class="form-control" placeholder="Civil Status" id="civil"></div>
                                        <div class="col-sm-12 col-lg-6">
                                        <input type="text" class="form-control" placeholder="Contact" id="contact"></div>
                                        <div class="col-sm-12 col-lg-6">
                                        <input type="text" class="form-control" placeholder="Job title" id="jobtitle"></div>
                                        <div class="col-sm-12 col-lg-6">
                                        <input type="text" class="form-control" placeholder="Employment type" id="emptype"></div>
                                        <div class="col-12">
                                        <input type="text" class="form-control" placeholder="Probation period" id="probperiod"></div> 
                                        <div class="col-12">
                                        <input type="text" class="form-control" placeholder="Permanent Address" id="peradd"></div>
                                        <div class="col-12">
                                        <input type="text" class="form-control" placeholder="Employee contract" id="empcontract"></div>                                               
                                        </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" onclick="addEmp()">Add Employee</button>
                                        <div id="add"></div>
                                    </div>
                                    </div>
                                </div>
                            </div>
               
                            <!-- modal end for add employee -->
                               
                                <button type="button" class="updateGo" data-toggle="modal" data-target="#updateModal" disabled>Update</button>
                            <!-- modal for update employee -->
                            
                            <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Update Employee</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid p-0">
                                        <div class="row">
                                        <div class="col-12">
                                        <input type="text" class="form-control" placeholder="ID" id="Uid" readonly></div>
                                        <div class="col-sm-12 col-lg-4">
                                        <input type="text" class="form-control" placeholder="Firstname" id="Ufname"></div> 
                                        <div class="col-sm-12 col-lg-4">
                                        <input type="text" class="form-control" placeholder="Lastname" id="Ulname"></div>
                                        <div class="col-sm-12 col-lg-4">
                                        <input type="text" class="form-control" placeholder="Age" id="Uage"></div>
                                        <div class="col-sm-12 col-lg-6">
                                        <input type="text" class="form-control" placeholder="Email" id="Uemail"></div>
                                        <div class="col-sm-12 col-lg-6">
                                        <input type="text" class="form-control" placeholder="Gender" id="Ugender"></div>
                                        <div class="col-sm-12 col-lg-6">
                                        <input type="text" class="form-control" placeholder="Civil Status" id="Ucivil"></div>
                                        <div class="col-sm-12 col-lg-6">
                                        <input type="text" class="form-control" placeholder="Contact" id="Ucontact"></div>
                                        <div class="col-sm-12 col-lg-6">
                                        <input type="text" class="form-control" placeholder="Job title" id="Ujobtitle"></div>
                                        <div class="col-sm-12 col-lg-6">
                                        <input type="text" class="form-control" placeholder="Employment type" id="Uemptype"></div>
                                        <div class="col-12">
                                        <input type="text" class="form-control" placeholder="Probation period" id="Uprobperiod"></div> 
                                        <div class="col-12">
                                        <input type="text" class="form-control" placeholder="Permanent Address" id="Uperadd"></div>
                                        <div class="col-12">
                                        <input type="text" class="form-control" placeholder="Employee contract" id="Uempcontract"></div>                                               
                                        </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" onclick="updateEmp()">Save Changes</button>
                                        <div id="update"></div>
                                    </div>
                                    </div>
                                </div>
                            </div>
               
                            <!-- modal end for update employee -->
                                <button type="button" class="viewGo" onclick="viewAll()">View All</button>
                          
                        </div>
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
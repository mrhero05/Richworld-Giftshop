<?php
include 'include/head.inc.php';
include 'include/nav.inc.php';
?>

<div class="col-sm-12 col-lg-10">
    <div class="employee">
            
                <p class="hrmanager-title">Department Manager</p>
                
                <!-- for employee view  -->
               
                <div class="hr-manager-container">
                    <script src="js/script.js?v=<?php echo time(); ?>"></script>
                    <input type="text" placeholder="Type something here..." class="searchbtn" id="searchInput">
                    <div class="hr-manager">
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
                        <button type="button" class="searchb">Search</button> 
                        <button type="button" class="init" onclick="fin_remarks()">Final Interview</button> 
                        
                    </div>
                </div>
    <div id="tablecontent">

    </div>
    </div>
</div>
  

<!-- start modal accept applicant -->

<div class="modal fade" id="finmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content">
     <div class="modal-header">
         <h5 class="modal-titles" id="exampleModalLongTitle">Remarks for this user</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
         </button>
     </div>
     <div class="modal-body">
    <form action="include/acceptTosubreq.inc.php" method="POST">
     <h3 class="finname" style="color:#fd5757"></h3>
     <h3 class="finjob"></h3>
     <input type="hidden" class="fin_id" value="" name="initid">
     </div>
     <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Decline</button>
         <button type="submit" class="btn btn-primary">Passed</button>
     </div> 
     </form>
     </div>
 </div>
</div>
    <!-- end modal accept applicant -->

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
<div class="company-title">
    <div class="row">
    <div class="col-sm-12 col-lg-6 com-title">
            <p>Company Structure</p>
        </div>
        <div class="col-sm-12 col-lg-6 align-self-center">
               <!-- Button trigger modal -->
               <div class="add-trigger">
               <button type="button" data-toggle="modal" data-target="#exampleModalCenter">
                Add department
                </button>
               </div>
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
                            <h5>Department name</h5>
                            <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                            <h5>Parent department</h5>
                            <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                            <h5>Add department</h5>
                            <textarea class="form-control" aria-label="With textarea"></textarea>
                        
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
        <div class="row">
            <div class="col-12">
                <div class="company-container">
                    <div class="admin">
                        admin
                    </div>
                </div>    
            </div>
        </div>
    
</div>




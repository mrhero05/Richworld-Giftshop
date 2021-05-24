<?php
include 'include/head.inc.php';
include 'include/nav.inc.php';
?>

<div class="col-sm-12 col-lg-10">
<div class="company-title">
    <div class="row">
        <div class="col-sm-12 col-lg-6">
            <h1>Company Structure</h1>
        </div>
        <div class="col-sm-12 col-lg-6 text-center align-self-center">
               <!-- Button trigger modal -->
                <button type="button" data-toggle="modal" data-target="#exampleModalCenter">
                Add department
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Company</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h4>Department name</h4>
                            <input type="text" class="form-control" placeholder="Input Department Name" aria-label="Username" aria-describedby="basic-addon1">
                            <h4>Parent department</h4>
                            <input type="text" class="form-control" placeholder="Input Parent Name" aria-label="Username" aria-describedby="basic-addon1">
                            <h4>Add department</h4>
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




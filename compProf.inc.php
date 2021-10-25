<?php
include "include/head.inc.php";
include "include/dbc.inc.php";
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;
?>
<section id="complete-profile">
<form action="include/finishAcc.inc.php" method="POST" enctype="multipart/form-data">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="complete-prof">
                    <h2>One more step to complete your profile</h2>
                    <p>You can add change your profile later in the settings.</p>
                    <script src="js/script.js?v=<?php echo time(); ?>"></script>
                    <img src="img/account-profile/default.jpg" id="profImg">
                    <br>
                    <div class="choosefile">
                        <br>
                    <input class="form-control form-control" id="formFile" type="file" name="profileImg" onchange="img_pathUrl(this)">
                    </div>
                    <br>
                    <div class="comp_dropdown">
                        <!-- <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                          Select a security question
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                            <li><a class="dropdown-item" href="#">What is your favorite pet?</a></li>
                            <li><a class="dropdown-item" href="#">In what city you were born?</a></li>
                            <li><a class="dropdown-item" href="#">What highschool did you attend?</a></li>
                            <li><a class="dropdown-item" href="#">What your mother's maiden name?</a></li>
                            <li><a class="dropdown-item" href="#">What is the name of your first school?</a></li>                       
                        </ul> -->
                        <div class="form-floating comp_select">
                            <select class="form-select" id="floatingSelect" name="qnumber" aria-label="Floating label select example">
                                <option selected disabled>Click to select</option>
                                <option value="1">What is your favorite pet?</option>
                                <option value="2">In what city you were born?</option>
                                <option value="3">What highschool did you attend?</option>
                                <option value="4">What your mother's maiden name?</option>
                                <option value="5">What is the name of your first school?</option>
                            </select>
                            <label for="floatingSelect">Select a security question</label>
                        </div>
                        <br>
                        <input type="text" placeholder="Your answer..." name="qanswer">
                        <br><br>
                        <input type="text" placeholder="Enter your email..." name="email" id="emailver">
                        <br><br>
                        <div class="comp_submit">
                        <button type="button" data-toggle="modal" data-target="#vercode" onclick="otpbtn();">Send OTP</button>
                        </div>
                        
                        <!-- <div class="form-floating comp_select">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="tanswer">
                            <option selected disabled>Click to select</option>
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                        </select>
                        <label for="floatingSelect">Account Type</label>
                        </div>     -->
                    </div>
                    <br>
                    <div class="comp_submit">
                    <button type="submit" name="finishSubmit">Finish</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</section>

<!-- start verification code -->

<div class="modal fade" id="vercode" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-titles" id="exampleModalLongTitle">Please Input your OTP code send via email.</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body otp" id="otpmodal">
        
        </div>
        <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" style="width:100%">Save Changes</button>
        </div>  -->
        </div>
    </div>
</div>
<!-- end modal verification code -->
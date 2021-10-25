<?php
include 'include/head.inc.php';
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="login-border mt-6">
                <div class="row">
                        <div class="col-sm-0 col-lg-6">
                        <div class="left">
                        <img src="img/login.svg" alt="Team collaborating">
                        </div>
                        </div>    
                        <!-- for the right half of login -->
                        <div class="col-sm-12 col-lg-6">
                            <!-- eto boss mag create ng form submit na post method papunta sa login.inc.php -->
                            <form action="include/login.inc.php" method="POST">
                            <div class="right">
                            <h1>Richworld Giftshop</h1>
                            <p>Your All-In-One HR Solutions</p>
                            <?php
                            if(isset($_GET["error"])){
                            if($_GET["error"]=="empty-input"){
                                echo "<p style='color:white;background-color:red'>Empty Input</p>";
                                echo '<script> alert("Please input username or password")</script>';
                              
                            }
                            // else if(isset($_GET["error"])){
                            else if($_GET["error"]=="wronglogin"){
                                    echo "<p style='color:white;background-color:#fd5757;border-radius:4px;padding:2px;'>Wrong Username or password</p>";
                                    echo '<script> alert("Wrong Username or password")</script>';
                                
                                }
                            }?>
                            <input type="text" placeholder="Username" name="user"><br>
                            <input type="password" placeholder="Password" name="pass">
                            <a><p class="forgotpass" style="cursor: pointer;" onclick="" data-toggle="modal" data-target="#forgotpass">Forgot password?</p></a>
                            <button type="submit" name="submit">Login</button>
                            <a href="register.php"><p>Dont have an account? Register here</p></a>
                            </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>

<!-- start modal forgot password -->

<div class="modal fade" id="forgotpass" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-titles" id="exampleModalLongTitle">Recover your password</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="include/security.inc.php" method="POST">
        <div class="modal-body otp" id="forgotmodal">
        <input type="text" placeholder="Input your username ..." name="user">
        <br><br>
            <div class="form-floating comp_select">
                                <select class="form-select" id="floatingSelect" name="qnumber" aria-label="Floating label select example">
                                    <option selected disabled>Click to select</option>
                                    <option value="1">What is your favorite pet?</option>
                                    <option value="2">In what city you were born?</option>
                                    <option value="3">What highschool did you attend?</option>
                                    <option value="4">What your mother's maiden name?</option>
                                    <option value="5">What is the name of your first school?</option>
                                </select>
                                <label for="floatingSelect">Select your security question</label>
                            </div>
            <input type="text" placeholder="Your answer ..." name="qanswer">

        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary" style="width:100%">Submit</button>
            <button type="button" class="btn btn-primary" style="width:100%" data-dismiss="modal" data-toggle="modal" data-target="#forgotpassotp">Try other method</button>
        </div> 
        </form>
        </div>
    </div>
</div>
<!-- end modal forgot password -->

<!-- start modal otp password -->

<div class="modal fade" id="forgotpassotp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-titles" id="exampleModalLongTitle">Recover your password using otp</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body otp" id="forgotmodal">
        <input type="text" placeholder="Input your email ..." name="email" id="emailver">
        <br>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" style="width:100%" data-dismiss="modal" data-toggle="modal" data-target="#vercode1" onclick="forotpbtn()">Send OTP</button>
            <button type="button" class="btn btn-primary" style="width:100%" data-dismiss="modal" data-toggle="modal" data-target="#forgotpass">Try other method</button>
        </div> 
    
        </div>
    </div>
</div>
<!-- end modal otp password -->

<!-- start verification code -->
<div id="otpviaemail"></div>
<div class="modal fade" id="vercode1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-titles" id="exampleModalLongTitle">Please Input your OTP code send via email.</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body otp" id="forotpmodal">
        
        </div>
        <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" style="width:100%">Save Changes</button>
        </div>  -->
        </div>
    </div>
</div>
<!-- end modal verification code -->
<script src="js/script.js?v=<?php echo time(); ?>"></script>
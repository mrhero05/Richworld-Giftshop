<?php
include 'include/head.inc.php';
?>
<!-- renamed class -->
<div class="container-register">
    <div class="row">
        <div class="col-lg-4 p-0">
            <!-- column for the left side with 2 witdth -->
            
            <div class="left-register">
            <a class="navbar-brand" style="font-size:18px;"><p style="padding-top:20%;text-align:center">R<span>G</span></p></a>
            <div class="register-title">
            <p>Richworld <span>Giftshop</span></p></div>
            <img src="img/register.svg" class="left-img">
            </div>
            
        </div>

        <div class="col-lg-8 p-0">
            <!-- column for the right side with 10 with its like a container -->
            <div class="right-register">
            <h1>Register an account.</h1>
            <h5>Lets get you all set up.</h5>
                <!-- another row para sa pag 2 column ng list ng fname - Contact at uname to pass -->
                <form action="include/register.inc.php" method="POST">
                <div class="row">
                    <!-- changed the p tag to label for the input -->
                    <?php
                            if(isset($_GET["error"])){
                                if($_GET["error"]=="empty-input"){
                                    echo "<p style='color:white;background-color:red;text-align:center;font-weight:bold;font-size:18px'>Empty Input</p>";
                                    echo '<script> alert("Please fill up all fields")</script>';}
                                else if($_GET["error"]=="password-not-match"){
                                    echo "<p style='color:white;background-color:red;text-align:center;font-weight:bold;font-size:18px'>Password not match</p>";
                                    echo '<script> alert("Password not match. Please retype password")</script>';}
                                else if($_GET["error"]=="contact-number-only"){
                                    echo "<p style='color:white;background-color:red;text-align:center;font-weight:bold;font-size:18px'>Invalid contact number</p>";
                                    echo '<script> alert("Please number only in contact")</script>';}
                                else if($_GET["error"]=="user-exist"){
                                    echo "<p style='color:white;background-color:red;text-align:center;font-weight:bold;font-size:18px'>Account Already Exist</p>";
                                    echo '<script> alert("Please use another username")</script>';}
                                    }
                            if(isset($_GET["success"])){
                                if($_GET["success"] == "account-create-successfully"){
                                    echo '<script>alert("Account Create Succesfully!");</script>';
                                }
                            }    
                                    ?>
                    <div class="col-lg-6">
                        
                        <label for="firstname">First Name</label>
                        <br>
                        <input type="text" name="fname" id="firstname">
                        <br>
                        <label for="lastname">Last Name</label>
                        <br>
                        <input type="text" name="lname" id="lastname">
                        <br>
                        <label for="contact">Contact #</label>
                        <br>
                        <input type="text" name="contact" id="contact">
                    </div>
                    <!-- changed the p tag to label for the input -->
                    <div class="col-lg-6">
                        <label for="username">Username</label>
                        <br>
                        <script src="js/script.js?v=<?php echo time(); ?>"></script>
                        <input type="text" name="uname" id="username" onchange="checkuser(this.value);">
                        <div id="cuser" style="padding-left: 7%;"><p style="color: cornflowerblue;">Check username availability</p>
                        </div>
                        
                        <label for="password">Password</label>
                        <br>
                        <input type="password"  name="pass" id="password">
                        <br>
                        <label for="retype">Re-type Password</label>
                        <br>
                        <input type="password"  name="pass2" id="retype">
                        <br>
                        <!-- <label for="email">Email Address</label>
                        <br>
                        <input type="text"  name="email" id="email">
                        <br> -->
                        <button type="submit" name="submit">Register</button>  
                       
                        <p style="color:#000;text-align:center">Already have an account?<a style="text-decoration:none;color:#FD5757" href="login.php" class="login-here"> Login here</a> </p>               
                    </div>
                    
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

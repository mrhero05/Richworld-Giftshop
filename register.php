<?php
include 'include/head.inc.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2 p-0">
            <!-- column for the left side with 2 witdth -->
            <div class="left-register"></div>
        </div>

        <div class="col-lg-10 p-0">
            <!-- column for the right side with 10 with its like a container -->
            <div class="right-register">
            <h1>Register an account.</h1>
                <!-- another row para sa pag 2 column ng list ng fname - Contact at uname to pass -->
                <form action="include/register.inc.php" method="POST">
                <div class="row">
                    <!-- changed the p tag to label for the input -->
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
                        <input type="text" name="uname" id="username">
                        <br>
                        <label for="password">Password</label>
                        <br>
                        <input type="password"  name="pass" id="password">
                        <br>
                        <label for="retype">Re-type Password</label>
                        <br>
                        <input type="password"  name="pass2" id="retype">
                        <br>
                        <label for="email">Email Address</label>
                        <br>
                        <input type="text"  name="email" id="email">
                        <br>
                        <button type="submit" name="submit">Register</button>                       
                    </div>
                    
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

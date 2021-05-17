<?php
include 'include/head.inc.php';
?>
<div class="container">
    <div class="row">
        <div class="col-lg-2 p-0">
            <!-- column for the left side with 2 witdth -->
            <div class="left-register">Lagyan nyo nalang img to</div>
        </div>

        <div class="col-lg-10 p-0">
            <!-- column for the right side with 10 with its like a container -->
            <div class="right-register">
            <h1>Register an account.</h1>
                <!-- another row para sa pag 2 column ng list ng fname - Contact at uname to pass -->
                <form action="include/register.inc.php" method="POST">
                <div class="row">
                    
                    <div class="col-lg-6">
                        <p>First name</p>
                        <input type="text" name="fname">
                        <p>Last name</p>
                        <input type="text" name="lname">
                        <p>Contact #</p>
                        <input type="text" name="contact">
                    </div>

                    <div class="col-lg-6">
                        <p>Username</p>
                        <input type="text" name="uname">
                        <p>Password</p>
                        <input type="password"  name="pass">
                        <p>Retype Password</p>
                        <input type="password"  name="pass2">
                        <p>Email address</p>
                        <input type="text"  name="email">
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

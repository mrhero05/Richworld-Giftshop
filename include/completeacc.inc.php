<?php
include 'include/head.inc.php';
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="login-border mt-5">
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
                            <p>Ocassion made special</p>
                           
                            <input type="text" placeholder="Username" name="user"><br>
                            <input type="password" placeholder="Password" name="pass">
                            <a href="" target="_blank"><p>Forgot password?</p></a>
                            <button type="submit" name="submit">Login</button>
                            <a href="register.php" target="_blank"><p>Dont have an account? Register here</p></a>
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

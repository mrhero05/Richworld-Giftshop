<?php
include "include/head.inc.php";
?>
<section id="complete-profile">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="complete-prof">
                    <h1>One more step to complete your profile</h1>
                    <p>You can add change your profile later in the settings.</p>
                    <img src="img/account-profile/default.jpg">
                    <br>
                    <input type="file">
                    <br>
                    <br>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                          Select a security question
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                            <li><a class="dropdown-item" href="#">What is your favorite pet?</a></li>
                            <li><a class="dropdown-item" href="#">In what city you were born?</a></li>
                            <li><a class="dropdown-item" href="#">What highschool did you attend?</a></li>
                            <li><a class="dropdown-item" href="#">What your mother's maiden name?</a></li>
                            <li><a class="dropdown-item" href="#">What is the name of your first school?</a></li>
                            
                         
                        </ul>
                        <bR><br>
                        <input type="text" placeholder="Your answer...">
                        <br><br>
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                            Account type
                        </button>
                          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                              <li><a class="dropdown-item" href="#">User</a></li>
                              <li><a class="dropdown-item" href="#">Admin</a></li>
                              
                    </div>
                    <br>
                    <button type="submit">Submit</button>
                    
                </div>
            </div>
        </div>
    </div>

</section>
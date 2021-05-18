<?php
include 'include/head.inc.php';
?>

<div class="container-fluid">
    <div class="row top-nav"> 
            <div class="col-lg-2">
                <div class="icon">
                    <!-- for icon -->
                    <p>ICON </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="time">
                <!-- for the time -->
                    <?php
                    echo date("h:i:sa");
                    ?>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="date">
                <!-- for date -->
                <?php
                echo date("Y/m/d");
                ?>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="account-dashboard">
                    <p>IMG </p>
                    <p> Daryl Rodriguez </p><br>
                    <p> Software Engineer </p>
                </div>
            </div>
        
    </div>
    <div class="row">
        <div class="col-lg-2">
            <div class="left-nav">

                <section id="nav-bar">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                      <div class="container-fluid">
                       
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                          <ul class="nav flex-column">
                                <li class="nav-item">
                                <a href="#nav-bar" style="text-decoration:none;">
                                    <button type="button"> Dashboard</button><br></a>
                                </li>   
                                <li class="nav-item">
                                <a href="#banner" style="text-decoration:none;">
                                    <button type="button"> Company Structure</button><br></a>
                                </li>
                                <li class="nav-item">
                                <a href="#project" style="text-decoration:none;">
                                    <button type="button"> Recent Activities</button><br></a>
                                </li>
                                <li class="nav-item">
                                <a href="#footer" style="text-decoration:none;">
                                    <button type="button"> Employees</button><br></a>
                                </li>
                                <li class="nav-item">
                                <a href="#footer" style="text-decoration:none;">
                                    <button type="button"> News/announcement</button><br></a>
                                </li>
                                <li class="nav-item">
                                <a href="#footer" style="text-decoration:none;">
                                    <button type="button"> Request leave</button><br></a>
                                </li>
                          </ul>
                        </div>
                      </div>
                    </nav>
                </section>
            </div>
        </div>
        <div class="col-lg-10">
            <div class="row">
                <div class="col-lg-7">
                    <div class="employee-summary">
                        <p>Employee Summary</p>
                        <p>15 active</p>
                        <p>15 active</p>
                        <p>15 active</p>  
                    </div>  
                    <div class="row">
                        <div class="col-lg-12">
                                <div class="announcement">
                                    <div class="announce-title">
                                        <p>News / Announcement</p>
                                    </div>
                                    <div class="announce-user">
                                    <p>Ogie Sanchez</p></div>
                                    <div class="announce-user">
                                        <p>Ogie Sanchez</p></div>
                                </div>
                        </div>
                    </div>    
                </div>
                <div class="col-lg-5">
                    <div class="recent">
                        <p>Recent Activities</p>
                        <p>Description</p>
                        <p>Employee Data <label>Time</label></p>
                        <p>Employee Data <label>Time</label></p>
                        <p>Employee Data <label>Time</label></p>
                        <p>Employee Data <label>Time</label></p>
                        <p>Employee Data <label>Time</label></p>
                        <p>Employee Data <label>Time</label></p>
                        <p>Employee Data <label>Time</label></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


 </body>
</html>
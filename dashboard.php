<?php
include 'include/head.inc.php';
?>

<div class="container-fluid">
    <div class="row top-nav"> 
            <div class="col-sm-2">
                <div class="icon">
                    <!-- for icon -->
                    
                    <p>richworld<span>giftshop</span></p>
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
                echo date("m/d/Y");
                ?>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="account-dashboard">
                    <img src="img/daryl.svg" alt="sadboi">
                    <p class="name"> Daryl Rodriguez </p>
                    <p class="pos"> Software Engineer </p>
                </div>
            </div>
        
    </div>
    <div class="row">
        <div class="col-lg-2 p-0">
            <div class="left-nav">

                <section id="nav-bar">
                    <nav class="navbar navbar-expand-lg navbar-light nav-bg">
                      <div class="container-fluid">
                       
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">  
                        <span class="navbar-toggler-icon burger-menu"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                          <ul class="nav flex-column">
                                <li class="nav-item">
                                <a href="#nav-bar" style="text-decoration:none;">
                                <button type="button" style="margin-top:45px;"><img src="img/dashboard.svg" alt="dashboard icon"> Dashboard</button><br></a>
                                </li>   
                                <li class="nav-item">
                                <a href="#banner" style="text-decoration:none;">
                                    <button type="button"><img src="img/structure.svg" alt="dashboard icon"> Company</button><br></a>
                                </li>
                                <li class="nav-item">
                                <a href="#project" style="text-decoration:none;">
                                    <button type="button"><img src="img/recent.svg" alt="dashboard icon"> Recent Activities</button><br></a>
                                </li>
                                <li class="nav-item">
                                <a href="#footer" style="text-decoration:none;">
                                    <button type="button"><img src="img/employee.svg" alt="dashboard icon"> Employees</button><br></a>
                                </li>
                                <li class="nav-item">
                                <a href="#footer" style="text-decoration:none;">
                                    <button type="button"><img src="img/announcement.svg" alt="dashboard icon">Announcements</button><br></a>
                                </li>
                                <li class="nav-item">
                                <a href="#footer" style="text-decoration:none;">
                                    <button type="button"><img src="img/leave.svg" alt="dashboard icon"> Request leave</button><br></a>
                                </li>
                          </ul>
                        </div>
                      </div>
                    </nav>
                </section>
            </div>
        </div>
        <div class="col-lg-10 p-0">
            <div class="row">
                <div class="col-lg-9 p-0">
                    <div class="employee-summary">
                        <!-- added <p> classes  -->
                        <p class="emp-title">Employee Summary</p>
                        <div class="emp-sum">
                        <p><img src="img/act-emp.svg" alt="sample"><br> 15 Active Employees</p>
                        <p><img src="img/departments.svg" alt="sample"><br> 4 Departments</p>
                        <p><img src="img/notif.svg" alt="sample"><br> 8 New Request Leave</p>
                        </div>  
                    </div>  
                    <div class="row">
                        <div class="col-lg-12">
                                <div class="announcement">
                                    <div class="announce-title">
                                        <p>News/Announcements</p>
                                    </div>
                                    <!-- /* post cards like twitter w/ hover */ -->
                                    <div class="post">
                                           <p class="post-name"><img src="img/daryl.svg" alt="sadboi">Mark Angelo Reynante<span>Date/time</span></p>
                                            <p class="post-title">Title</p>
                                            <p class="post-des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus molestiae excepturi, quia debitis placeat, quidem quibusdam id quaerat commodi, dolorem aperiam. Nobis adipisci at totam non quod fuga, ratione beatae!</p>
                                        </div>
                                        <!-- /* post cards like twitter w/ hover */ -->
                                        <div class="post">
                                           <p class="post-name"><img src="img/daryl.svg" alt="sadboi">Mark Angelo Reynante <span>Date/time</span></p>
                                            <p class="post-title">Title</p>
                                            <p class="post-des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus molestiae excepturi, quia debitis placeat, quidem quibusdam id quaerat commodi, dolorem aperiam. Nobis adipisci at totam non quod fuga, ratione beatae!</p>
                                        </div>
                                </div>
                        </div>
                    </div>    
                </div>
                <div class="col-lg-3 p-0">
                    <div class="recent">
                        <!-- added each <p> classes  -->
                         <!-- added span for time   -->
                        <p class="recent-title">Recent Activities</p>
                        <p class="recent-des">Description <span>Time</span></p>
                        <p>Employee Data<label>Time</label></p>
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
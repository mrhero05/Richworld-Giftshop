
<div class="container-fluid body">
    <div class="row top-nav"> 
            <div class="col-sm-12 col-lg-2">
                <div class="icon">
                    <!-- for icon -->
                    
                    <p>richworld<span>giftshop</span></p>
                </div>
            </div>
            <div class="col-sm-0 col-lg-4">
                <div class="time">
                <!-- for the time -->
                    <?php
                    echo date("h:i:sa");
                    ?>
                </div>
            </div>
            <div class="col-sm-0 col-lg-4">
                <div class="date">
                <!-- for date -->
                <?php
                echo date("m/d/Y");
                ?>
                </div>
            </div>
        <div class="col-sm-12 col-lg-2">
            <div class="account-dashboard">
                <div class="dropdown">       
                        <div class="btn-group">
                            <img src="img/daryl.svg" alt="sadboi">
                            <p class="name"> Daryl Rodriguez</p>
                        <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">TBD</a></li>
                            <li><a class="dropdown-item" href="#">TBD</a></li>
                            <li><a class="dropdown-item" href="#">TBD</a></li>
                            <li><a class="dropdown-item" href="#">TBD</a></li>
                            <li><a class="dropdown-item" href="#">TBD</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Log out</a></li>
                        </ul>
                        </div>
                </div>     
            </div>
        </div>
        
    </div>
    <div class="row">
        <div class="col-lg-2 p-0">
            <div class="left-nav">
                <section id="nav-bar">
                    <nav class="navbar navbar-expand-lg navbar-light nav-bg">
                      <div class="container-fluid">
                        <button class="navbar-toggler burger-menu" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">  
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                          <ul class="nav flex-column">
                                <li class="nav-item">
                                <a href="dashboard.php" style="text-decoration:none;">
                                <button type="button" style="margin-top:45px;"><img src="img/dashboard.svg" alt="dashboard icon"> Dashboard</button><br></a>
                                </li>   
                                <li class="nav-item">
                                <a href="company.php" style="text-decoration:none;">
                                    <button type="button"><img src="img/structure.svg" alt="dashboard icon"> Company</button><br></a>
                                </li>
                                <li class="nav-item">
                                <a href="#project" style="text-decoration:none;">
                                    <button type="button"><img src="img/recent.svg" alt="dashboard icon"> Recent Activities</button><br></a>
                                </li>
                                <li class="nav-item">
                                <a href="employee.php" style="text-decoration:none;">
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
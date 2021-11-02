<?php
include 'include/head.inc.php';
include 'include/dbc.inc.php';
session_start();
if($_SESSION["acc_type"] == "admin"){
  header("location:dashboard.php");
  exit();
  }
?>

</body>
</html>
<nav class="navbar navbar-expand-lg navbar-light" id="nav_index">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><p>R<span>G</span></p></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        
            <li class="nav-item">
            <a class="nav-link active"aria-current="page" href="#nav-body">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#download">Download</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="job.php" style="margin-right:20px">Job Listing</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#about" style="margin-right:20px">About</a>
            </li>
            <li class="nav-item">
            <?php
            if(isset($_SESSION["profile-name"])){
              $accid = $_SESSION["userId"];
              $sql = "SELECT * from account where acc_id = '$accid'";
              $result = mysqli_query($conn,$sql);
              if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                  $_SESSION["refreshpath"] = $row["prof_path"];
                }
              }
              echo '<div class="account-dashboard">
              <div class="dropdown">       
                      <div class="btn-group">';
                          
                          $prof_name = "img/account-profile/".$_SESSION["refreshpath"];?>
                          <img src="<?php echo $prof_name;?>" class="profile_img" alt="profile">
                          <?php
                          echo '<p class="name" style="color:black">'.$_SESSION["profile-name"].'</p>';
                      echo '<button type="button" style="background-color:#FD5757 !important" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                          <span class="visually-hidden">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu">
                          <li><p class="dropdown-item" style="color:red">Account : <span style="color:green">'.$_SESSION["acc_type"].'<span></p></li>
                          <li><a class="dropdown-item" href="#">Settings</a></li>
                          <li><a class="dropdown-item" href="messages.php">Messages</a></li>
                          <li><a class="dropdown-item" href="status.php">Status</a></li>
                          <li><a class="dropdown-item" href="#">TBD</a></li>
                          <li><a class="dropdown-item" href="#">TBD</a></li>
                          <li><a class="dropdown-item" href="#">TBD</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><form action="include/logout.inc.php" method="POST"><a class="dropdown-item"><button type="submit" name="logout">Log out</button></a></form></li>
                      </ul>
                      </div>
              </div>     
              </div>';
            }else{
            echo '<a href="login.php"><button type="button" class="nav-login">Login</button></a>';}?>
            </li>
      </ul>
    </div>
  </div>
</nav>
<section id="nav-body">
<div class="container">
    <div class="row">
      <!-- for introduction part -->
        <div class="col-lg-4">
        <div data-aos="zoom-in"
                  data-aos-delay="40"
                  data-aos-duration="1000"
                  data-aos-easing="ease-in-out"
              >
          <div class="title">
            <h1>The easiest way to organize your employees</h1>
            <p>Your all-in-one hr solutions.</p>
            <button type="button">Get started</button>
          </div>
</div>
        </div>
        <div class="col-lg-6 ms-auto">
        <div data-aos="fade-right"
                  data-aos-delay="60"
                  data-aos-duration="1100"
                  data-aos-easing="ease-in-out"
              >
          <div class="hrimg">
            <img src="img/index_icon/hr.svg">
          </div>
</div>
        </div>
    </div>
</div>

<div class="container-fluid">
  <div class="row">
      <div class="bgwave-red">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FD5757" fill-opacity="1" d="M0,128L40,128C80,128,160,128,240,154.7C320,181,400,235,480,245.3C560,256,640,224,720,181.3C800,139,880,85,960,80C1040,75,1120,117,1200,133.3C1280,149,1360,139,1400,133.3L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>   
        </svg>
        <h1>Features</h1>
        <div class="container-fluid features">
          <div class="row">
            <div class="col-lg-4">
            <div data-aos="slide-up"
                  data-aos-delay="50"
                  data-aos-duration="1000"
                  data-aos-easing="ease-in-out"
              >
              <div class="easy">
              <img src="img/index_icon/easy.svg">
              <h2>Easy to use</h2>
              <p>Richworld-Giftshop Website is easy to use as far as online application is concern. Here, you can 
                create your own account and be connected to us. Aside from that the major idea of this website is to help
                applicants to save time and money because applicants can apply through online. As the technology 
                innovates, the developer of this web application summed up to one idea to create this online application and develop
                it in the near future.</p>
              </div>
              </div>
            </div>
            <div class="col-lg-4">
            <div data-aos="slide-up"
                  data-aos-delay="50"
                  data-aos-duration="1100"
                  data-aos-easing="ease-in-out"
              >
              <div class="recruit">
                <img src="img/index_icon/recruitment.svg">
                <h2>Recruitment</h2>
                <p>E-recruitment, often known as online recruitment, is the process of attracting, analyzing, choosing, recruiting, and onboarding job prospects using web-based technology. 
                  Employers can access a bigger number of potential employees through e-recruitment.
                  The prolific use of the internet for recruiting has made it easier to source candidates and conduct interviews as well as process the relevant paperwork required to hire and train candidates. </p>
                </div>
                </div>
            </div>
            <div class="col-lg-4">
            <div data-aos="slide-up"
                  data-aos-delay="50"
                  data-aos-duration="1200"
                  data-aos-easing="ease-in-out"
              >
              <div class="security">
                <img src="img/index_icon/security.svg">
                <h2>Security</h2>
                <p>From the moment applicants submit personal files and are categorised until the process of being safeguarded and evaluated, the Richworld-Giftshop integrated data security architecture keeps your data safe.
Your sensitive unstructured data remains secure no matter where it is in the ever-changing IT environment, including repositories, endpoints, databases, printouts, email, and mobile devices, to fulfill the varying security requirements of the many phases in the document lifecycle.</p>
                </div>
            </div>
            </div>
          </div>
        </div>  
      </div>
      </div>
</div>
</section>

<section id="download">
  <div class="download">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-5">
          <div class="d-img">
          <div data-aos="slide-right"
                data-aos-delay="40"
                data-aos-duration="1100"
                data-aos-easing="ease-in-out"
            >
          <img src="img/index_icon/mobile-mockup3.svg">
          </div>
          </div>
        </div>
        <div class="col-lg-7">
        <div data-aos="fade-up"
              data-aos-delay="50"
              data-aos-duration="1100"
              data-aos-easing="ease-in-out"
          >
          <div class="d-title">
          <h1>Richworld Giftshop App</h1>
          <h5>The advantage of this website is that the applicants can apply using their mobile phones. The developers made the website 
            responsive in order to reach the users phone compatibility. The website will adjust automatically according to the screen of the user's phone.
          </h5>
          <button type="button">Download App</button>
          </div>
        </div>
        </div>
      </div>
  </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#2f2e41" fill-opacity="1" d="M0,128L26.7,133.3C53.3,139,107,149,160,133.3C213.3,117,267,75,320,53.3C373.3,32,427,32,480,64C533.3,96,587,160,640,160C693.3,160,747,96,800,90.7C853.3,85,907,139,960,165.3C1013.3,192,1067,192,1120,202.7C1173.3,213,1227,235,1280,218.7C1333.3,203,1387,149,1413,122.7L1440,96L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"></path></svg>
</section>

<!-- for testimonial -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <!-- for carousel using bootstrap -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      
      <section id="testimonial">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="testimonial">
              <h1>Testimonials</h1>
              <img src="img/index_icon/daryl.svg">
              <p>I honestly recommend this Website for Richworld-Giftshop. It helps alot when it comes 
                to saving time, money, and effort just to apply for company. And I like how the process goes from the start up until the end.
                Overall I'd like to share this website to my friends for them to know this website. 
              </p>
              <h5>Arturo Dela cruz</h5>
              <h6>Bagger</h6>
              <br>
              <br>
              </div>
            </div>
          </div>
        </div>
        </section>

    </div>
    <div class="carousel-item">
      
      <section id="testimonial">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="testimonial">
              <h1>Testimonials</h1>
              <img src="img/index_icon/daryl.svg">
              <p>I love this kind of website and it helps a lot of people to apply online. The process was good
                and you will be able to see what job cavant is available. </p>
              <h5>Kevin Zapanta</h5>
              <h6>Truck Driver</h6>
              <br>
              <br>
              </div>
            </div>
          </div>
        </div>
        </section>

    </div>
    <div class="carousel-item">
      
      <section id="testimonial">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="testimonial">
              <h1>Testimonials</h1>
              <img src="img/index_icon/daryl.svg">
              <p>I finally hired, thanks to this website and to the developers. I love to recommend This to all
                friends. Surely they will love to know this website and they will apply them also.
              </p>
              <h5>Jestony Adamero</h5>
              <h6>OIC</h6>
              <br>
              <br>
              </div>
            </div>
          </div>
        </div>
        </section>

    </div>
  </div>
  
</div>

<!-- for about us -->
<section id="about">
  <div class="about">
    <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1>About Us</h1>
        <br>
        <p>Human Resource Information System for Richworld-Giftshop is a Website use for online recruitment. 
          This website is developed by Information Technology Students from Global Reciprocal Colleges. Aspiring
          future IT Specialists wherein the main goal is to develop more web applications for the industry.</p>
        <br><br><br>   
      </div>
    </div>
    </div>
  </div>
</section>
<section id="about-card">
<div data-aos="fade-up"
      data-aos-delay="50"
      data-aos-duration="900"
      data-aos-easing="ease-in-out"
  >
  <div class="about-card">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-lg-4 mb-4">
          <div class="about-frame">
            <img src="img/profile/ogie-icon.svg">
            <h4>Ogie Sanchez</h4>
            <h6>Fullstack Developer</h6>
            <p>Knowledgable in Html, Mysql and in many programming languages such as Php, Java, Visual basic etc. Well informed
              in designing using Css and Bootstrap.</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mb-4">
          <div class="about-frame">
            <img src="img/profile/thom-icon.svg">
            <h4>Thompie Lumerio</h4>
            <h6>Front-End Developer &amp; Technical Writer</h6>
            <p>Basic knowledge in Html, Css, Mysql and Document Editor.</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mb-4">
          <div class="about-frame">
            <img src="img/profile/vince-icon.svg">
            <h4>Jhon Vince Macatigbac</h4>
            <h6>Technical Writer &amp; Graphic Designer</h6>
            <p>Head Technical Writer and Designer.</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mb-4">
          <div class="about-frame">
            <img src="img/profile/pole-icon.svg">
            <h4>Kenneth Pole</h4>
            <h6>Front-End Developer &amp; UI/UX Designer</h6>
            <p>Knowledgable in Html, Css, Bootstrap and Head Web Designer</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mb-4">
          <div class="about-frame">
            <img src="img/profile/daryl-icon.svg">
            <h4>Daryl Rodriguez</h4>
            <h6>Technical Writer</h6>
            <p>Document Editor.</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mb-4">
          <div class="about-frame">
            <img src="img/profile/gelo-icon.svg">
            <h4>Mark Angelo Reynante</h4>
            <h6>Document Specialist</h6>
            <p>Document Editor.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<section id="footer">
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-lg-4">
        <div data-aos="flip-down"
                  data-aos-delay="50"
                  data-aos-duration="1000"
                  data-aos-easing="ease-in-out">
        <div class="footer-title">
          <p>Richworld <span>Giftshop</span></p></div>
<!-- animations closing div -->
</div>
          </div>
        <div class="col-sm-12 col-lg-2">
        <div data-aos="fade-up"
                  data-aos-delay="50"
                  data-aos-duration="900"
                  data-aos-easing="ease-in-out">
          <div class="flink">
          <p>Support</p>
            <a href=""><h6>Contact Us</h6></a>
            <a href=""><h6>FAQ</h6></a>
            <a href=""><h6>Downloads</h6></a>
        </div>
<!-- animations closing div -->
</div>
        </div>
        <div class="col-sm-12 col-lg-2">
        <div data-aos="fade-up"
                  data-aos-delay="50"
                  data-aos-duration="900"
                  data-aos-easing="ease-in-out">
          <div class="flink">
          <p>Follow</p>
          <a href=""><h6>Facebook</h6></a>
          <a href=""><h6>Twitter</h6></a>
          <a href=""><h6>Linkedin</h6></a>
        </div>
<!-- animations closing div -->
</div>
        </div>
        <div class="col-sm-12 col-lg-2">
        <div data-aos="fade-up"
                  data-aos-delay="50"
                  data-aos-duration="900"
                  data-aos-easing="ease-in-out">
          <div class="flink">
          <p>Legal</p>
          <a href=""><h6>Terms</h6></a>
          <a href=""><h6>Privacy</h6></a>
        </div>
<!-- animations closing div -->
</div> 
        </div>
      </div>
      <br>
      <span style="color: white;">All rights reserved 2021-2022 </span>
      <br><br><br>
    </div>
  </div>
 
</section>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
AOS.init();
</script>
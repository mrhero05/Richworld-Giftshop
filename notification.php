<?php
include "include/head.inc.php";
session_start();
if(!isset($_SESSION["userId"])){
    header("location:login.php");
    exit();
}
?>
<body>
<section id="messages">
<script src="js/script.js?v=<?php echo time(); ?>"></script>
    <div class="container-fluid m-0">
        <div class="row">
            <div class="col-lg-5">
            <br>
                <div class="message-left-top">
                    
                <button type="button" class="back" style="margin-left:20px;" onclick="javascript:history.back()"></button>
                <h2><strong>Notification</strong></h2>
                <button type="button" data-toggle="modal" data-target="#searchMessage" onclick="clearSearch();"><img src="img/searchbutton.svg" alt="" style="margin-top:-5px;margin-left:-20px;"></button>
                </div>
                <?php 
                include "include/dbc.inc.php";
                $id = $_SESSION["userId"];
                $sql = "SELECT * from account where acc_id = '$id'";
                $result = mysqli_query($conn,$sql);
                $acctype = "";
                if(mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_assoc($result);
                    $acctype = $row["acc_type"];
                }
                if($acctype == "hrmanager"){
                    echo '<div class="msg-div" style="cursor:pointer" onclick="expandmsgInitial();">
                    <img src="img/default-avatar.svg">
                    <h5>Initial Interview <span></span></h5>
                    <p></p>
                    </div>
    
                    <div class="msg-div" style="cursor:pointer" onclick="expandmsgWritten();">
                    <img src="img/default-avatar.svg">
                    <h5>Written Exam <span></span></h5>
                    <p></p>
                    </div>';
                }else if($acctype == "department"){
                    echo '<div class="msg-div" style="cursor:pointer" onclick="expandmsgFinal();">
                    <img src="img/default-avatar.svg">
                    <h5>Final Interview <span></span></h5>
                    <p></p>
                    </div>';
                }
                ?>
            </div>
            
            <div class="col-lg-7 p-0 right-bg">
          
                <div class="message-right-top">
                <img src="img/default-avatar.svg" class="profile-right">
                <h2 class="rName">
                     <span><img src="img/three-dot.svg" class="option"></span> 
                    <span><img src="img/bell.svg" class="bell"></span>
                </h2>
                </div>
                <div class="msg-right">
                    <div id="msg-right-div-def" style="text-align: center;">
                    </div>
                </div>
                
                <!-- <div class="send-msg-parent">
                <div class="send-msg">
                    
                <input type="text" placeholder="Aa" id="sMsg"><button type="button" onclick="sendmsgUser();"><img src="img/send.svg"></button>
                </div>
                </div> -->
              
            </div>
           
        </div>
    </div>
</section>

</body>
</html>
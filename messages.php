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
                <h2><strong>Messages</strong></h2>
                <button type="button" data-toggle="modal" data-target="#searchMessage" onclick="clearSearch();"><img src="img/searchbutton.svg" alt="" style="margin-top:-5px;margin-left:-20px;"></button>
                </div>
                <?php 
                include "include/dbc.inc.php";
                $id = $_SESSION["userId"];
                $acctype = $_SESSION["acc_type"];
                if($acctype == "admin"){
                    $sql = "SELECT account.acc_user,meeting.acc_id,meet_date,meet_time,meet_link,meet_msg,reciever_id FROM `meeting` INNER JOIN account on meeting.acc_id = account.acc_id WHERE meeting.acc_id = '$id'";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            $rid = $row["reciever_id"];
                            $sql1 = "SELECT acc_user from account where acc_id = '$rid'";
                            $result1 = mysqli_query($conn,$sql1);
                            $row1= mysqli_fetch_assoc($result1);
                            echo '<div class="msg-div" style="cursor:pointer" onclick="expandmsg(this);">
                            <input type="hidden" class="rUser_id" value="'.$row["acc_id"].'">
                            <input type="hidden" class="admin_id" value="'.$row["reciever_id"].'">
                            <input type="hidden" class="admin_name" value="'.$row1["acc_user"].'">
                            <img src="img/default-avatar.svg">
                            <h5> '.$row1["acc_user"].'<span>'.$row["meet_time"].'</span></h5>
                            <p>'.$row["meet_msg"].'</p>
                         
                            </div>';
                            }
                        }
                }else if($acctype == "user"){
                    $sql = "SELECT account.acc_user,meeting.acc_id,meet_date,meet_time,meet_link,meet_msg,reciever_id FROM `meeting` INNER JOIN account on meeting.acc_id = account.acc_id WHERE reciever_id = '$id'";
                    $result = mysqli_query($conn,$sql);  
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo '<div class="msg-div" style="cursor:pointer" onclick="expandmsg(this);">
                            <input type="hidden" class="rUser_id" value="'.$row["reciever_id"].'">
                            <input type="hidden" class="admin_id" value="'.$row["acc_id"].'">
                            <input type="hidden" class="admin_name" value="'.$row["acc_user"].'">
                            <img src="img/default-avatar.svg">
                            <h5> '.$row["acc_user"].'<span>'.$row["meet_time"].'</span></h5>
                            <p>'.$row["meet_msg"].'</p>
                         
                            </div>';
                            }
                        }  
                }
                
                //$sql = "SELECT * from messages where msg_id in (select max(msg_id) from messages group by sender_id)";
                ?>
            </div>
            
            <div class="col-lg-7 p-0 right-bg">
          
                <div class="message-right-top">
                <img src="img/default-avatar.svg" class="profile-right">
                <input type="hidden" class="rId" id="rId">
                <input type="hidden" id="sId" value="<?php echo $_SESSION["userId"];?>">
                <h2 class="rName">
                     <span><img src="img/three-dot.svg" class="option"></span> 
                    <span><img src="img/bell.svg" class="bell"></span>
                    
                </h2>
                </div>
                <div class="msg-right">
                    <div class="msg-right-div-def">
                        
                    </div>
                </div>
                
                <div class="send-msg-parent">
                <div class="send-msg">
                    
                <input type="text" placeholder="Aa" id="sMsg"><button type="button" onclick="sendmsgUser();"><img src="img/send.svg"></button>
                </div>
                </div>
              
            </div>
           
        </div>
    </div>
</section>

<!-- start modal search message -->
<div class="modal fade" id="searchMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content">
     <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLongTitle">Search People</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
         </button>
     </div>
     <div class="modal-body" id="input-body">
        <h5>Search </h5>
        <input type="search" id="searchP" oninput="searchMessage();">
        <div id="searchPerson"></div> 
    </div>
     </div>
 </div>
</div>
    <!-- end modal search message -->

</body>
</html>
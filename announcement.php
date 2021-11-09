<?php
session_start();
include "include/dbc.inc.php";
if($_SESSION["acc_type"] == "user"){
  header("location:index.php");
  exit();
}
include 'include/head.inc.php';
include 'include/nav.inc.php';
?>

<div class="col-lg-10">
    <div class="row">
        <div class="news-header">
            <h2>News/Announcements</h2>
        </div>
        <div class="col-lg-7 ann-news">
            <h4>Recent Posts</h4>
            <div class="news">
                <?php
                $sql = "SELECT * from announcement";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                      echo '<div class="ann-post">
                        <p class="ann-name">'.$row["fullname"].'<span>'.$row["ann_date"].'/'.$row["ann_time"].'</span></p>
                         <p class="ann-title">'.$row["title"].'</p>
                         <p class="ann-des">'.$row["ann_description"].'</p>
                     </div>';
                    }
                }
                ?>
                
            </div>
        </div>
        <div class="col-lg-4 ann-create">
            <h4>Create</h4>
            <div class="post-info">
                <form action="include/announcement.inc.php" method="POST">
                <label for="fullname">Full Name</label>
                <br>
                <?php 
                $fullid = $_SESSION["userId"];
                $fullname = "";
                $sql = "SELECT * from account where acc_id = '$fullid'";
                $result = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($result)){
                    $fullname = $row["firstname"]." ".$row["lastname"];
                }
                echo '<input type="text" name="fullname" style="pointer-events:none;color:#fd5757" id="fullname" name="fullname" value="'.$fullname.'">';?>
                <br>
                <label for="title">Title</label>
                <br>
                <input type="text" name="title" id="title" name="title">
                <br>
                <label for="description">Description</label>
                <br>
                <div class="desc">
                    <textarea name="description" id="" cols="30" rows="10" placeholder="Type something here..." name="description"></textarea>
                </div>
                <button type="submit" name="submitann">Post</button> 
                </form> 
            </div>
        </div>
    </div>
</div>   
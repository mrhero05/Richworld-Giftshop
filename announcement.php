<?php
session_start();
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
                <div class="ann-post">
                    <p class="ann-name">Mark Angelo Reynante<span>Date/time</span></p>
                     <p class="ann-title">Title</p>
                     <p class="ann-des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus molestiae excepturi, quia debitis placeat, quidem quibusdam id quaerat commodi, dolorem aperiam. Nobis adipisci at totam non quod fuga, ratione beatae!</p>
                 </div>
                <div class="ann-post">
                    <p class="ann-name">Mark Angelo Reynante<span>Date/time</span></p>
                     <p class="ann-title">Title</p>
                     <p class="ann-des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus molestiae excepturi, quia debitis placeat, quidem quibusdam id quaerat commodi, dolorem aperiam. Nobis adipisci at totam non quod fuga, ratione beatae!</p>
                 </div>
                <div class="ann-post">
                    <p class="ann-name">Mark Angelo Reynante<span>Date/time</span></p>
                     <p class="ann-title">Title</p>
                     <p class="ann-des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus molestiae excepturi, quia debitis placeat, quidem quibusdam id quaerat commodi, dolorem aperiam. Nobis adipisci at totam non quod fuga, ratione beatae!</p>
                 </div>
                <div class="ann-post">
                    <p class="ann-name">Mark Angelo Reynante<span>Date/time</span></p>
                     <p class="ann-title">Title</p>
                     <p class="ann-des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus molestiae excepturi, quia debitis placeat, quidem quibusdam id quaerat commodi, dolorem aperiam. Nobis adipisci at totam non quod fuga, ratione beatae!</p>
                 </div>
                <div class="ann-post">
                    <p class="ann-name">Mark Angelo Reynante<span>Date/time</span></p>
                     <p class="ann-title">Title</p>
                     <p class="ann-des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus molestiae excepturi, quia debitis placeat, quidem quibusdam id quaerat commodi, dolorem aperiam. Nobis adipisci at totam non quod fuga, ratione beatae!</p>
                 </div>
                <div class="ann-post">
                    <p class="ann-name">Mark Angelo Reynante<span>Date/time</span></p>
                     <p class="ann-title">Title</p>
                     <p class="ann-des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus molestiae excepturi, quia debitis placeat, quidem quibusdam id quaerat commodi, dolorem aperiam. Nobis adipisci at totam non quod fuga, ratione beatae!</p>
                 </div>
            </div>
        </div>
        <div class="col-lg-4 ann-create">
            <h4>Create</h4>
            <div class="post-info">
                <label for="fullname">Full Name</label>
                <br>
                <input type="text" name="fullname" id="fullname">
                <br>
                <label for="title">Title</label>
                <br>
                <input type="text" name="title" id="title">
                <br>
                <label for="description">Description</label>
                <br>
                <div class="desc">
                    <textarea name="description" id="" cols="30" rows="10" placeholder="Type something here..."></textarea>
                </div>
                <button type="submit" name="submit">Post</button>  
            </div>
        </div>
    </div>
</div>   
<?php
include "dbc.inc.php";
session_start();
$accid = $_SESSION["userId"];
$age = $_POST["age"];
$birthday = $_POST["bday"];
$status = $_POST["type"];
$address = $_POST["address"];
$gender = $_POST["gender"];



$filename = $_FILES["resume"]["name"];
$fileTmpname = $_FILES["resume"]["tmp_name"];
$fileSize = $_FILES["resume"]["size"];
$fileError = $_FILES["resume"]["error"];
$fileType = $_FILES["resume"]["type"];

$fileExt = explode('.',$filename);
$fileActExt = strtolower(end($fileExt));
$allowed = array('docx','pdf','doc');

//  for application letter
$filename1 = $_FILES["appletter"]["name"];
$fileTmpname1 = $_FILES["appletter"]["tmp_name"];
$fileSize1 = $_FILES["appletter"]["size"];
$fileError1 = $_FILES["appletter"]["error"];
$fileType1 = $_FILES["appletter"]["type"];

$fileExt1 = explode('.',$filename1);
$fileActExt1 = strtolower(end($fileExt1));
$allowed1 = array('docx','pdf','doc');

//  for tor 
$filename2 = $_FILES["tor"]["name"];
$fileTmpname2 = $_FILES["tor"]["tmp_name"];
$fileSize2 = $_FILES["tor"]["size"];
$fileError2 = $_FILES["tor"]["error"];
$fileType2 = $_FILES["tor"]["type"];

$fileExt2 = explode('.',$filename2);
$fileActExt2 = strtolower(end($fileExt2));
$allowed2 = array('docx','pdf','doc');

$newname = "resume".$accid.".".$fileActExt;
$fileDestination = '../resume/'.$newname;
move_uploaded_file($fileTmpname,$fileDestination);

// for appletter
$newname1 = "appletter".$accid.".".$fileActExt1;
$fileDestination1 = '../resume/'.$newname1;
move_uploaded_file($fileTmpname1,$fileDestination1);

 // for tor
 $newname2 = "tor".$accid.".".$fileActExt2;
 $fileDestination2 = '../resume/'.$newname2;
 move_uploaded_file($fileTmpname2,$fileDestination2);


$sql = "UPDATE account_complete SET age='$age',birthday='$birthday',civilstatus='$status',caddress='$address',gender='$gender',apply_resume='$newname',tor='$newname2',letter='$newname1' where acc_id = '$accid'";
mysqli_query($conn,$sql);
header("location:../index.php");
exit();
?>
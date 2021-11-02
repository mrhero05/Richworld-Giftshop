<?php
if(isset($_POST["applysubmit"])){
    include "dbc.inc.php";
 $job_id = $_POST["applyjob_id"];
 $acc_id = $_POST["applyacc_id"];

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

 if(in_array($fileActExt,$allowed) && in_array($fileActExt1,$allowed1) && in_array($fileActExt2,$allowed2)){
   $newname = "resume".$acc_id.".".$fileActExt;
   $fileDestination = '../resume/'.$newname;
   move_uploaded_file($fileTmpname,$fileDestination);

   // for appletter
   $newname1 = "appletter".$acc_id.".".$fileActExt1;
   $fileDestination1 = '../resume/'.$newname1;
   move_uploaded_file($fileTmpname1,$fileDestination1);

    // for tor
    $newname2 = "tor".$acc_id.".".$fileActExt2;
    $fileDestination2 = '../resume/'.$newname2;
    move_uploaded_file($fileTmpname2,$fileDestination2);

    $apply = "pending";
    $sql = "INSERT INTO applyjob (account_id,job_id,apply_resume,appletter,tor,apply_status,submit_resume,make_interview,initial_interview,make_written,written_exam,make_final,final_interview,sub_req,contract_sign,deployment) values ('$acc_id','$job_id','$newname','$newname1','$newname2','$apply',0,0,0,0,0,0,0,0,0,0)";
    $result = mysqli_query($conn,$sql);
    $sql1 = "UPDATE job set job_applied=job_applied+1 where job_id='$job_id'";
    $result2 = mysqli_query($conn,$sql1);
    header("location:../job.php?success=successfully apply");
    exit();
 }else{
    // echo '<script>alert("File type not supported")</script>';
    header("location:../job.php?error=file");
    exit();
 }

}else{
    header("location:../applyindex.php");
    exit();
}
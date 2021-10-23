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

 if(in_array($fileActExt,$allowed)){
   $newname = "resume".$acc_id.".".$fileActExt;
   $fileDestination = '../resume/'.$newname;
   move_uploaded_file($fileTmpname,$fileDestination);

    $apply = "pending";
    $sql = "INSERT INTO applyjob (account_id,job_id,apply_resume,apply_status,submit_resume,make_interview,initial_interview,make_written,written_exam,make_final,final_interview,medical_exam,sub_req,contract_sign,deployment) values ('$acc_id','$job_id','$newname','$apply',0,0,0,0,0,0,0,0,0,0)";
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
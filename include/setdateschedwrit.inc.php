<?php
include 'dbc.inc.php';
date_default_timezone_set('Asia/Manila');

$date = $_POST["date"];
$holiday = ["01-01","02-12","04-01","04-02","11-01","11-02","04-09","05-01","05-13","06-12","07-20","08-30","11-30","12-08","12-25","12-30"];
$getdate = explode("-",$date);
$holidayG = $getdate[0]."-".$getdate[1]; 
if(in_array($holidayG,$holiday)){
    echo '<script>swal("You select Holiday!", "Please select other date!", "error");</script>';
}
else{
    $sql = "SELECT * from written_sched where wsched_date = '$date'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) < 30){
        echo '
        <h6>Date : <span>'.$date.'</span> </h6> <h6>
        <input type="hidden" value="'.$date.'" name="date">';
    }else{
        echo '<script>swal("Schedule full!", "Please select other date!", "error");</script>';
    }
}
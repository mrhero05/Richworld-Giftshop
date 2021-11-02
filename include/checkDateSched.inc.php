<?php
include 'dbc.inc.php';
date_default_timezone_set('Asia/Manila');
$accid = $_POST["id"];
// $month = date("n");
// $day = date("j");
// $yr = date("Y");
// $fulldate = $month ."/". $day ."/". $yr;

// $fulldate = date('m/d/Y',strtotime("+1 day"));
// $fulldate = date('m/d/Y',strtotime("+2 day"));

$t1 = "8:00 am - 10:00am";
$t2 = "10:00 am - 12:00pm";
$t3 = "1:00 pm - 3:00pm";
$t4 = "3:00 pm - 5:00pm";
$truetime = "";
$timepick = "";
$maxdate="";

$sql = "SELECT count(*) as counttime,inisched_date from initial_sched where inisched_date = (select max(inisched_date) from initial_sched)";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)){

$timepick = $row["counttime"];
$maxdate = $row["inisched_date"];  
}
$fulldate = $maxdate;
if($timepick == 1){
    $truetime = $t2;
}else if($timepick == 2){
    $truetime = $t3;
}else if($timepick == 3){
    $truetime = $t4;
}else if($timepick == 4){
    $fulldate = date('m/d/Y',strtotime($maxdate."+1 day"));
    $truetime = $t1;
}else{
    $fulldate = date('m/d/Y',strtotime("+1 day"));
    $truetime = $t1;
}


echo '<h6>Date : <span>'.$fulldate.'</span> </h6> <h6>Time : <span>'.$truetime.'</span> </h6>';
echo '<input type="hidden" value="'.$fulldate.'" name="date">
        <input type="hidden" value="'.$truetime.'" name="time">
';
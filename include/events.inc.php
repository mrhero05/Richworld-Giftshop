<?php
date_default_timezone_set('Asia/Manila');
    include "dbc.inc.php";

    // $json = array();
    // $sqlQuery = "SELECT * FROM try1 ORDER BY id";

    // $result = mysqli_query($conn, $sqlQuery);
    // $eventArray = array();
    // while ($row = mysqli_fetch_assoc($result)) {
    //     array_push($eventArray, $row);
    // }
    // mysqli_free_result($result);

    // mysqli_close($conn);
    // echo json_encode($eventArray);
    $data = array();
    $count = 0;
    $query = "SELECT * FROM initial_sched";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result) > 0){
        foreach($result as $row){
            $data[] = array(
                'id'=>$row["inisched_id"],
                'title'=>$row["inisched_time"],
                'start'=>$row["inisched_date"]
               );
        }
    }
    
    echo json_encode($data);
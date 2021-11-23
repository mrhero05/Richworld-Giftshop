<?php
date_default_timezone_set('Asia/Manila');
    include "dbc.inc.php";
    $data = array();
    $count = 0;
    $query = "SELECT written_id,wsched_date,COUNT(*) as c
    FROM written_sched
    GROUP BY wsched_date
    HAVING COUNT(*) >= 1";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result) > 0){
        foreach($result as $row){
            $data[] = array(
                'id'=>$row["written_id"],
                'title'=>$row["c"]." schedule",
                'start'=>$row["wsched_date"]
               );
        }
    }
    
    echo json_encode($data);
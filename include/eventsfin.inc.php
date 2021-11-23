<?php
date_default_timezone_set('Asia/Manila');
    include "dbc.inc.php";

    $data = array();
    $count = 0;
    $query = "SELECT * FROM final_sched";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result) > 0){
        foreach($result as $row){
            $data[] = array(
                'id'=>$row["finsched_id"],
                'title'=>$row["finsched_time"],
                'start'=>$row["finsched_date"]
               );
        }
    }
    
    echo json_encode($data);
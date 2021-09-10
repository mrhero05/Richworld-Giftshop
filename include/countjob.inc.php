<?php
    include 'dbc.inc.php';
    $sql = "SELECT count(*) as jobc from job";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
             echo '<h2>Showing '.$row["jobc"].' Jobs</h2>';
        }
    }
  
   

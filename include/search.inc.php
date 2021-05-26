<?php
include 'dbc.inc.php';

    if($_POST["getSearch"]==null){
        echo '<h1>Please input in search bar</h1>';
    }else{
        if(!isset($_POST["getCheck"])){
        echo '<h1>Please select search method</h1>';
        }else{
            $gotSearch = $_POST["getSearch"];
            $gotCheck = $_POST["getCheck"];
            $sql = "SELECT * from account where ".$gotCheck." like '%$gotSearch%'";
            $view = mysqli_query($conn,$sql);
            if(mysqli_num_rows($view) > 0){
                echo '<table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">First name</th>
                        <th scope="col">Last name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Civil Status</th>
                        <th scope="col">Contact #</th>
                        <th scope="col">Email address</th>
                        <th scope="col">Job title</th>
                        <th scope="col">Employment</th>
                        </tr>
                    </thead>';
                while($row = mysqli_fetch_assoc($view)){
                    

                    echo '<tbody><tr><td>'.$row["acc_id"].'</td>
                        <td>'.$row["firstname"].'</td>
                        <td>'.$row["lastname"].'</td>
                        <td>'.$row["contact"].'</td>
                        <td>'.$row["contact"].'</td>
                        <td>'.$row["contact"].'</td>
                        <td>'.$row["contact"].'</td>
                        <td>'.$row["contact"].'</td>
                        <td>'.$row["contact"].'</td>
                        </tr>';
                    
                }
                echo '</tbody>
                </table>';
            }else{
                echo '<h1>No Record Found ...</h1>';
            }
        }
    }


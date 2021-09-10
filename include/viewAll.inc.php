<?php
    include 'dbc.inc.php';
  
    $sql = "SELECT * from employee";
    $view = mysqli_query($conn,$sql);
    if(mysqli_num_rows($view) > 0){
        echo '<table class="table table-hover" id="viewTable">
            <thead class="table-dark">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">First name</th>
                <th scope="col">Last name</th>
                <th scope="col">Age</th>
                <th scope="col">Email</th>
                <th scope="col">Gender #</th>
                <th scope="col">Civil status</th>
                <th scope="col">Contact</th>
                <th scope="col">Job title</th>
                <th scope="col">Employment type</th>
                <th scope="col">Probation period</th>
                <th scope="col">Address</th>
                <th scope="col">Employee contract</th>
                <th scope="col">Option</th>
                </tr>
            </thead>';
        while($row = mysqli_fetch_assoc($view)){
            

            echo '<tbody><tr>
                <td>'.$row["emp_id"].'</td>
                <td>'.$row["emp_fname"].'</td>
                <td>'.$row["emp_lname"].'</td>
                <td>'.$row["emp_age"].'</td>
                <td>'.$row["emp_email"].'</td>
                <td>'.$row["emp_gender"].'</td>
                <td>'.$row["emp_civil"].'</td>
                <td>'.$row["emp_contact"].'</td>
                <td>'.$row["emp_jobTitle"].'</td>
                <td>'.$row["emp_empType"].'</td>
                <td>'.$row["emp_probPeriod"].'</td>
                <td>'.$row["emp_perAdd"].'</td>
                <td>'.$row["emp_empContract"].'</td>
                <td> <button type="button" class="updateGo" data-toggle="modal" data-target="#updateModal" onclick="dataUpdate()">Update</button></td>
                        
                </tr>';
            
        }
        echo '</tbody>
        </table>';
    }

<?php
include "dbc.inc.php";
$id = $_POST["input"];
if(empty($id)){
echo '<p>Please Search Something</p>';
}else{
$sql = "SELECT * from account where firstname like '%$id%' or lastname like '%$id%'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
    echo '
    <br><div class="table-responsive resultTbl">
    <table class="table table-hover">
        <thead class="table-dark">
            <tr>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Option</th>
            </tr>
        </thead>';
      
    while($row = mysqli_fetch_assoc($result)){
        echo '
            <tbody>    
                <tr>                                
                <td>'.$row["firstname"].'</td>
                <td>'.$row["lastname"].'</td>
              
                <input type="hidden" class="msgUser_name" id="class="msgUser_name"" value="'.$row["firstname"].''." ".''.$row["lastname"].'">
                <input type="hidden" class="msgUser_id" value="'.$row["acc_id"].'">
                <td><button type="button" class="btn btn-primary" onclick="getmsgUser(this);" data-dismiss="modal" aria-label="Close">Message</button></td>
                </tr>
            </tbody>
            ';
    }
    echo '           
    </table>
    </div>';
}else{
    '<p>No Result Found</p>';
}
}

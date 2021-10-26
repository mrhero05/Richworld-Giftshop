<?php
session_start();
if(!isset($_SESSION["forgot_id"])){
 header("location:../login.php");
 exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel ="icon" href="../img/Logo.svg" type = "image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../des.css?v=<?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
<title>Richworld Giftshops</title>
</head>
<body>
<div class="container">
<form action="dochangepass.inc.php" method="POST">
    <div class="row">
        <div class="col-12">
            <div class="changepass">
                <div class="changebody">
                    
                    <div class="row">
                        <div class="col-lg-12 changeimg">
                        <img src="../img/Logo.svg">
                        <h3 style="margin-bottom: 5%;text-align:center">Create New Password</h3></div>
                        <div class="col-lg-12">
                        <label>New Password</label><br> 
                        <input type="password" placeholder="Enter a new password" name="pass1"></div>
                        <br>
                        <div class="col-lg-12">
                        <label>Retype Password</label><br> 
                        <input type="password" placeholder="Confirm your new password" name="pass2"></div>
                        <div class="col-lg-12 changebtn">
                        <button type="submit">Reset my password</button></div>
                    </div>
                    
                    
                </div>
            </div>

        </div>
    </div>
    </form>
</div>
</body>
</html>
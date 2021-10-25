<?php
use PHPMailer\PHPMailer\PHPMailer;
session_start();
include "dbc.inc.php";
$email = $_POST["email"];

$sql = "SELECT * from account where email = '$email'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
 $otp = rand(100000,999999);
 $_SESSION['otp'] = $otp;
 $_SESSION['mail'] = $email;
 require '../vendor/autoload.php';
 $mail = new PHPMailer;

 $mail->isSMTP();
 $mail->Host='smtp.gmail.com';
 $mail->Port=587;
 $mail->SMTPAuth=true;
 $mail->SMTPSecure='tls';

 $mail->Username='richworldgiftshop@gmail.com';
 $mail->Password='richworldgiftshop12345';

 $mail->setFrom('richworldgiftshop@gmail.com', 'OTP Verification');
 $mail->addAddress($_POST["email"]);

 $mail->isHTML(true);
 $mail->Subject="Your verify code";
 $mail->Body="<p>Dear user, </p> <h3>Your verification OTP code for changing your password is '$otp' <br></h3>
 <br><br>
 <p>With regrads,</p>
 <b>Richworld Giftshop</b>";
 if(!$mail->send()){
     ?>
         <script>
             alert("<?php echo "Sending OTP failed, Invalid Email "?>");
         </script>
     <?php
 }else{
     ?>
     <script>
         <?php
         $sql1 = "UPDATE account set otp = '$otp' where email = '$email'";
         mysqli_query($conn,$sql1);
         ?>
         alert("<?php echo "OTP sent successfully to " . $email ?>");
     </script>
     <?php
     $_SESSION["emailused"] = $email;
    echo '
    <form action="include/changepassotp.inc.php" method="POST">
   <input type="text" placeholder="Enter your otp..." name="code" id="otpCode">
   <br><br>
   <div id="otpmsg"></div>
    <div class="comp_submit">
    <button type="submit" name="verify">Verify</button>
    </div></form>';
 }

}else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo '<div id="otpdiv">
    <h1>You have enter an invalid email</h1>
    </div>';
}else{
    echo '<div id="otpdiv">
    <h1>There was an error</h1>
    </div>';
}
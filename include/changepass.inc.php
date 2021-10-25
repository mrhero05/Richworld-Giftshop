<?php
include 'include/head.inc.php';
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="dochangepass.inc.php" method="POST">
            <input type="input" placeholder="New Password" name="pass1">
            <input type="input" placeholder="Retype Password" name="pass2">
            <button type="submit">Change Password</button>
            </form>
        </div>
    </div>

</div>
</body>
</html>
<?php
require_once('pro_login.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>OMNIphar</title>
        <link rel="stylesheet" href="css/login.css">
    </head>
    <body>
        <img src="assets/delivery.png" alt="delivery" class="delivery">
        <img src="assets/logo.png" alt="logo" class="logo">
        <div class="main">
        <form action="" method="POST">
            <h1>Login</h1>
            <p class="description">Email</p>
            <input type="email" class="detail" id="email" placeholder="Enter your email" name="mail" required>
            <p class="description">Password</p>
            <input type="password" class="detail" id="password" placeholder="Enter password" name="pass" required>
            <br>
        <input type="submit" id="btn" value="Log In" name="login_btn">
            <div class="error"><span class = "error"><?php echo $err ?></span></div><br>
            <div class="success"><span class = "success"><?php echo $suc ?></span></div><br>
            <p>New Here? <a href="auth/signup.php">SIGN UP</a></p>
        </form>
        </div>
    </body>
</html>
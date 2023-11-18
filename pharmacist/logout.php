<?php
require_once('pro_login.php');
?>
<!DOCTYPE html>
<html>
    <head>
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
        <title>OMNIphar</title>
        <link rel="stylesheet" href="css/rlogout.css">
    </head>
    <body>
        <img src="assets/Teleportation.png" alt="delivery" class="teleportation">

        <img src="assets/Omniphar.png" alt="logo" class="logo">
        <div class="main">
        <form action="" method="POST">
        <div class="main-title">You are <br> logged Out !</div>
            <p class="description">You're logged out. To see your account please log in.
            <br> Don't have an account? Sign in to create one.</p>
            <button class="login" type="submit" value="Log In" name="login_btn"><a href="login.php">Log In</a></button>
            <button class="signin" type="submit" value="sign In" name="signin_btn">Sign In</button><br><br>
            <div><a href=""><i class='bx bxl-facebook-circle social'></i><i class='bx bxl-twitter social'></i><i class='bx bxl-linkedin social' ></i></i></a></div>
            <!-- <input type="" id="btn" value="Log In" name="login_btn"> -->
        </form>
        </div>
    </body>
</html>
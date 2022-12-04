<!DOCTYPE html>
<html>
    <head>
        <title>Rider_Login</title>
        <link rel="stylesheet" href="css/rlogin.css">
    </head>
    <body>
        <img src="assets/logo.png" alt="logo">
        <div>
        <form action="pro_rlogin.php" method="POST">
            <h1>Rider Login</h1>
            <p class="description">Email</p>
            <input type="email" class="detail" id="email" placeholder="Enter your email" name="mail">
            <p class="description">Password</p>
            <input type="password" class="detail" id="password" placeholder="Enter password" name="pass">
            <br>
        <input type="submit" id="btn" value="Log In" name="login_btn">
        </form>
        </div>
    </body>
</html>
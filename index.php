<?php include("login.php")?>
<!doctype html>
<html>
    <head>
      <title>Login</title> 
      <link rel="stylesheet" href="index.css"> 
    </head>
<body class="body">

  <div class="centered">
  <div class="login">

  <div class="logo">
<img src="logo.png" alt="logo">
</div>  
 <h1>Login Now!</h1>
<form action="login.php" method="post" style="text-align:right">
<input type="email" placeholder="Enter Email" id="username" name="username"><br><br>
<input type="password" placeholder="Enter Password" id="password" name="password"><br><br>
<a href="add_med.php">Forgot password?</a><br><br>
<input type="submit"  value="LOG IN" name="login">
</div>
</div>
</body>
</html>
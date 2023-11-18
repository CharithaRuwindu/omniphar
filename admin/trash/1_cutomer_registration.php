<?php
    require_once('pro_signup.php');
    // require_once('header-1.php');
    // require_once('navbar.php');
?>

<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" href="css/pharmacists.css" type="text/css">
    </head>

	<body> 
    <section class="home">
    <form action="" method="POST">
            <h1>Sign up</h1>

            <p class="description">Role</p>
                <select id="cars" name="role">
                <option value="volvo" selected>customer</option>
                <option value="saab">pharmacist</option>
                <option value="vw">delivery person</option>
                </select>
            <p class="description">Email</p>
            <input type="email" class="detail" id="email" placeholder="Enter your email" name="mail" required>
            <p class="description">Password</p>
            <input type="password" class="detail" id="password1" placeholder="Enter password" name="pass1" required>
            <p class="description">Re-enter Password</p>
            <input type="password" class="detail" id="password2" placeholder="Re-enter your password" name="pass2" required>
            <p class="description">First Name</p>
            <input type="text" class="detail" id="fname" placeholder="Enter your First Name" name="fname" required>
            <p class="description">Last Name</p>
            <input type="text" class="detail" id="lname" placeholder="Enter your Last Name" name="lname" required>
            <p class="description">Address</p>
            <input type="text" class="detail" id="address" placeholder="Enter your Permanent Address" name="address" required>
            <p class="description">Contact</p>
            <input type="text" class="detail" id="contact" placeholder="Enter your Phone Number" name="contact" required>
            <p class="description">NIC</p>
            <input type="text" class="detail" id="nic" placeholder="Enter your national id card number" name="nic" required>
        <input type="submit" id="btn" value="Sign up" name="signup_btn">
            <div class="error"><span class = "error"><?php echo $err ?></span></div><br>
            <div class="success"><span class = "success"><?php echo $suc ?></span></div><br>
            <p>Already have an account? <a href="login.php">Log In</a></p>
        </form>
    </section>


    </body>
</html>

        


        

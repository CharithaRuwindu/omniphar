<?php
require_once('../dbconn.php');
require_once('pro_req.php');
?>

<html>
    <head>
        <title>OMNIphar</title>
        <link rel="stylesheet" href="../css/delivery_person_req.css">
        
    </head>

	<body> 
    <img src="../assets/order.png" alt="signup" class="signup">
        <img src="../assets/logo.png" alt="logo" class="logo">
        <div class="main">
        <form action="" method="POST" enctype="multipart/form-data">
            <h1>Register as a delivery person</h1>
            <p class="description">Email</p>
            <input type="email" class="detail" id="email" placeholder="Enter your email" name="email" required>
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
            <p class="description">Profile Photo</p>
            <input type="file" accept="image/*" name="pimage" required>
            <p class="description">Vehicle Type</p>
            <select name="vtype" required>
                <option value="car">Car</option>
                <option value="motorbike">Motor Bike</option>
                <option value="threewheeler">Three Wheeler</option>
                <option value="other">Other</option>
            </select>
            <p class="description">License plate number</p>
            <input type="text" class="detail" placeholder="Enter your license plate number" name="lno" required>
            <p class="description">License plate image</p>
            <input type="file" name="license_p_image" accept="image/*" required>
            <p class="description">Photo of driving license</p>
            <label for="dfimage">front</label>
            <input type="file" name="dfimage" accept="image/*" required><br>
            <label for="dbimage">back</label>
            <input type="file" name="dbimage" accept="image/*" required>


        <input type="submit" id="btn" value="Send Request" name="reg_btn">
            <div class="error"><span class = "error"><?php echo $err ?></span></div><br>
            <div class="success"><span class = "success"><?php echo $suc ?></span></div><br>
            <p>Already have an account? <a href="../login.php">Log In</a></p>
        </form>
        </div>



































    
            <!-- <div class="popup" id="popup">

            <form class="form1" action="" method="POST" enctype="multipart/form-data">
            
          <div class="main">
            <h2>Register as a delivery person here</h2>
          <form action="" method="POST" enctype="multipart/form-data">
          <table>
            <tr>
                <td><label class="description">First name</label></td>
                <td class="details"><input class="input1" type="text" name = "fname" placeholder="Enter Full name here."></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td><label class="description">Last name</label></td>
                <td class="details"><input class="input1" type="text" name = "lname" placeholder="Enter Last name here."></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td><label class="description">Email</label></td>
                <td class="details"><input class="input1" type="email" name = "email" placeholder="Enter Email here."></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td><label class="description">NIC Number</label></td>
                <td class="details"><input class="input1" type="text" name = "nic" placeholder="Enter NIC Number here."></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td><label class="description">Address</label></td>
                <td class="details"><input class="input1" type="text" name = "address" placeholder="Enter Address here."></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td><label class="description">Phone number</label></td>
                <td class="details"><input class="input1" type="text" name = "contact" placeholder="Enter Phone number here."></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td><label class="description">Profile image:-</label></td>
                <td class="details"><input class="input1" type="file" accept="image/*" name="pimage" autocomplete="off" placeholder="Enter Vehicle Type here."></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td><label class="description">Vehicle Type</label></td>
                <td class="details"><input class="input1" type="text" name = "vtype" placeholder="Enter Vehicle Type here."></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td><label class="description">License plate Number</label></td>
                <td class="details"><input class="input1" type="text" name = "lno" placeholder="Enter License Plate Number here."></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td><label class="description">License Plate Image:-</label></td>
                <td class="details"><input class="input1" type="file" accept="image/*" name="license_p_image" autocomplete="off"></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td><label class="description">Photo of driving license</label></td>
                <td class="details"><div>Front:<input class="input1" type="file" accept="image/*" placeholder="Insert  image" name="dfimage" autocomplete="off"></div><br>
            <div>Back:<input class="input1" type="file" accept="image/*" placeholder="Insert  image" name="dbimage" autocomplete="off"></div></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td><label class="description">Password</label></td>
                <td class="details"><input class="input1" type="password" name = "pass1" placeholder="Enter Password here."></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td><label class="description">Re enter the password</label></td>
                <td class="details"><input class="input1" type="password" name = "pass2" placeholder="Re enter the password here."></td>
            </tr>
            <tr>
            <div><button id="reg" type="submit" name="reg_btn">Register</button></div>
            </tr>
          </table>
          </form>
       -->





    
    </body>
</html>
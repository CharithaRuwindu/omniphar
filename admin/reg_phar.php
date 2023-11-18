<?php
    require_once('header-1.php');
    require_once('navbar.php');
require_once('add_phar.php');
?>
<!DOCTYPE html>
<html>

<head>
  <title>OMNIphar</title>
  <link rel="stylesheet" href="css/reg_customer.css" type="text/css">
</head>

<body>
  <section class="home">
    <form action="" method="POST" enctype="multipart/form-data" class="form1">
      <a class="iconcls" href="pharmacists.php"><i class='bx bx-window-close'></i></a>

      <div class="title">
        <i class="fas fa-pencil-alt"></i>
        <h2>Register the pharmacist here</h2>
      </div>
      <table>
        <tr>
          <td>
            <p class="description">Email</p>
          </td>
          <td class="second"><input type="email" class="detail" id="email" placeholder="Enter your email" name="mail"
              required></td>
        </tr>
        <tr>
            <td colspan="2">
              <hr>
            </td>
        <tr>
          <td>
            <p class="description">Password</p>
          </td>
          <td class="second"><input type="password" class="detail" id="password1" placeholder="Enter password"
              name="pass1" required></td>
        </tr>
        <tr>
            <td colspan="2">
              <hr>
            </td>
        <tr>
          <td>
            <p class="description">Re-enter Password</p>
          </td>
          <td class="second"><input type="password" class="detail" id="password2" placeholder="Re-enter your password"
              name="pass2" required></td>
        </tr>
        <tr>
            <td colspan="2">
              <hr>
            </td>
        <tr>
          <td>
            <p class="description">First Name</p>
          </td>
          <td class="second"><input type="text" class="detail" id="fname" placeholder="Enter your First Name"
              name="fname" required></td>
        </tr>
        <tr>
            <td colspan="2">
              <hr>
            </td>
        <tr>
          <td>
            <p class="description">Last Name</p>
          </td>
          <td class="second"><input type="text" class="detail" id="lname" placeholder="Enter your Last Name"
              name="lname" required></td>
        </tr>
        <tr>
            <td colspan="2">
              <hr>
            </td>
        <tr>
          <td>
            <p class="description">Address</p>
          </td>
          <td class="second"><input type="text" class="detail" id="address" placeholder="Enter your Permanent Address"
              name="address" required></td>
        </tr>
        <tr>
            <td colspan="2">
              <hr>
            </td>
        <tr>
          <td>
            <p class="description">Contact</p>
          </td>
          <td class="second"><input type="text" class="detail" id="contact" placeholder="Enter your Phone Number"
              name="contact" required></td>
        </tr>
        <tr>
            <td colspan="2">
              <hr>
            </td>
        <tr>
          <td>
            <p class="description">NIC</p>
          </td>
          <td class="second"><input type="text" class="detail" id="nic" placeholder="Enter your national id card number"
              name="nic" required></td>
        </tr>
        <tr>
            <td colspan="2">
              <hr>
            </td>
        <tr>
          <td>
            <p class="description">Profile Photo</p>
          </td>
          <td class="second"><input type="file" name="pic" required></td>
        </tr>
        <tr>
            <td colspan="2">
              <hr>
            </td>
      </table>
      <br>
      <input class="button1" id="reg" type="submit" id="btn" value="Sign up" name="signup_btn">
      <div class="error"><span class="error"><?php echo $err ?></span></div><br>
      <div class="success"><span class="success"><?php echo $suc ?></span></div><br>
    </form>
  </section>
  </div>
</body>

</html>
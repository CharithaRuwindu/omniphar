<?php
    require_once('header-1.php');
    require_once('navbar.php');
    require_once('dbconn.php');
    require_once('add_rider.php');


?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="css/reg_rider.css" type="text/css">
  <title>del</title>
</head>

<body>
  <section class="home">
    <form class="form1" action="" method="POST" enctype="multipart/form-data">
      <a class="iconcls" href ="delivery_persons.php"><i class='bx bx-window-close'></i></a>
      <div class="title">
        <i class="fas fa-pencil-alt"></i>
        <h2>Register the delivery person here</h2>
      </div>
      <table>
        <tr>
          <td><label>First name</label></td>
          <td class="second"><input class="input1" type="text" name="fname" placeholder="Enter Full name here."></td>
        </tr>
        <tr>
          <td colspan="2">
            <hr>
          </td>
        </tr>
        <tr>
          <td><label>Last name</label></td>
          <td class="second"><input class="input1" type="text" name="lname" placeholder="Enter Last name here."></td>
        </tr>
        <tr>
          <td colspan="2">
            <hr>
          </td>
        </tr>
        <tr>
          <td><label>Email</label></td>
          <td class="second"><input class="input1" type="email" name="email" placeholder="Enter Email here."></td>
        </tr>
        <tr>
          <td colspan="2">
            <hr>
          </td>
        </tr>
        <tr>
          <td><label>NIC Number</label></td>
          <td class="second"><input class="input1" type="text" name="nic" placeholder="Enter NIC Number here."></td>
        </tr>
        <tr>
          <td colspan="2">
            <hr>
          </td>
        </tr>
        <tr>
          <td><label>Address</label></td>
          <td class="second"><input class="input1" type="text" name="address" placeholder="Enter Address here."></td>
        </tr>
        <tr>
          <td colspan="2">
            <hr>
          </td>
        </tr>
        <tr>
          <td><label>Phone number</label></td>
          <td class="second"><input class="input1" type="text" name="contact" placeholder="Enter Phone number here.">
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <hr>
          </td>
        </tr>
        <tr>
          <td><label>Vehicle Type</label></td>
          <td class="second"><input class="input1" type="text" name="vtype" placeholder="Enter Vehicle Type here."></td>
        </tr>
        <tr>
          <td colspan="2">
            <hr>
          </td>
        </tr>
        <tr>
          <td><label>Profile image:-</label></td>
          <td class="second"><input class="input1" type="file" accept="image/*" name="pimage" autocomplete="off"
              placeholder="Enter Vehicle Type here."></td>
        </tr>
        <tr>
          <td colspan="2">
            <hr>
          </td>
        </tr>
        <tr>
          <td><label>License plate Number</label></td>
          <td class="second"><input class="input1" type="text" name="lno"
              placeholder="Enter License Plate Number here."></td>
        </tr>
        <tr>
          <td colspan="2">
            <hr>
          </td>
        </tr>
        <tr>
          <td><label>License Plate Image:-</label></td>
          <td class="second"><input class="input1" type="file" accept="image/*" name="license_p_image"
              autocomplete="off"></td>
        </tr>
        <tr>
          <td colspan="2">
            <hr>
          </td>
        </tr>
        <tr>
          <td><label>Photo of driving license</label></td>
          <td class="second">
            <div>Front:<input class="input1" type="file" accept="image/*" placeholder="Insert  image" name="dfimage"
                autocomplete="off"></div><br>
            <div>Back:<input class="input1" type="file" accept="image/*" placeholder="Insert  image" name="dbimage"
                autocomplete="off"></div>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <hr>
          </td>
        </tr>
        <tr>
          <td><label>Password</label></td>
          <td class="second"><input class="input1" type="password" name="pass1" placeholder="Enter Password here."></td>
        </tr>
        <tr>
          <td colspan="2">
            <hr>
          </td>
        </tr>
        <tr>
          <td><label>Re enter the password</label></td>
          <td class="second"><input class="input1" type="password" name="pass2"
              placeholder="Re enter the password here."></td>
        </tr>
        <tr>
          <td colspan="2">
            <hr>
          </td>
        </tr>
      </table>
      <div class="btns">
        <div><a href ="delivery_persons.php"><button id="cancel" type="button" >Close</button></a></div>
        <div></div>
        <div></div>
        <div></div>
        <div><button id="reg" type="submit" name="reg_btn">Register</button></div>
        <br>
      </div>

    </form>

  </section>
</body>

</html>
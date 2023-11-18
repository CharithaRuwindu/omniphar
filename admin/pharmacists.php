<?php
    require_once('dbconn.php');
    require_once('header-1.php');
    require_once('navbar.php');
    require_once('add_phar.php');
?>

<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" href="css/pharmacists.css" type="text/css">
    </head>

	<body> 
    <section class="home">
    <div class="div1">
        <div>
            <h1>Pharmacists</h1>        </div>
        <a href="reg_phar.php"><button class="addcstmrbtn">Register a new pharmacist </button></a>
        <br><br><br>
        <table class="mytbl">
          <tr>
            <th>User Id</th>
            <th>Name</th>
            <th>Contact</th>
            <th>view</th>
          </tr>
        <?php
        $query="SELECT * from user WHERE role ='pharmacist'";
        $result= mysqli_query($conn,$query);  
                        while($row = mysqli_fetch_assoc($result))
                        {
                            $pid=$row['id'];
                    ?>

          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?></td>
            <td><?php echo $row['contact']; ?></td>
            <td><button class ="profbtn" ><a href="pharmacist_profile.php?pid=<?php echo $row['id'];?>">View Profile</a></button></td>
            
          </tr>
      
        <?php
      }
      
                ?>
    </table>

<!-- Popups -->
<div class="popup" id="popup">
      <form class="form1" action="" method="POST">
      <a  class ="iconcls" onclick="closePopup()"><i class='bx bx-window-close'></i></a>
              <div class="title">
                <i class="fas fa-pencil-alt"></i> 
                <h2>Register the Pharmacist here</h2>
              </div>
      <table>
          <tr>
            <td><label>First Name</label></td>
            <td class="second"><input class="input1" type="text" name="fname" placeholder="Enter pharmacist's first name."></td>
          </tr>
          <tr><td colspan="2"><hr></td></tr>
          <tr>
            <td><label>Last Name</label></td>
            <td class="second"><input class="input1" type="text" name="lname" placeholder="Enter pharmacist's last name."></td>
          </tr>
          <tr><td colspan="2"><hr></td></tr>
          <tr>
            <td><label>Address</label></td>
            <td class="second"><input class="input1" type="text" name="address" placeholder="Enter address of the pharmacist"></td>
          </tr>
          <tr><td colspan="2"><hr></td></tr>
          <tr>
            <td><label>National identity card number</label></td>
            <td class="second"><input class="input1" type="text" name="nic" placeholder="Enter NIC number of the pharmacist"></td>
          </tr>
          <tr><td colspan="2"><hr></td></tr>
          <tr>
            <td><label>Contact Information (phone number)</label></td>
            <td class="second"><input class="input1" type="text" name="contact" placeholder="Enter Contact Information here."></td>
          </tr>
          <tr><td colspan="2"><hr></td></tr>
          <tr>
            <td><label>Email</label></td>
            <td class="second"><input class="input1" type="email" name="email" placeholder="Enter email here."></td>
          </tr>
          <tr><td colspan="2"><hr></td></tr>
          <tr>
            <td><label>Password</label></td>
            <td class="second"><input class="input1" type="password" name="pass1" placeholder="Enter password."></td>
          </tr>
          <tr><td colspan="2"><hr></td></tr>
          <tr>
            <td><label>Confirm Password</label></td>
            <td class="second"><input class="input1" type="password" name="pass2" placeholder="Re enter password."></td>
          </tr>
          <tr><td colspan="2"><hr></td></tr>
          <tr>
            <td><label>Profile Picture</label></td>
            <td class="second"><input class="input1" type="file" accept="image/*" placeholder="Insert  image" name="pimage" autocomplete="off"></td>
          </tr>
          <tr><td colspan="2"><hr></td></tr>
        </table>
        <br>
    <div class="btns">

          <div><button class="button1" id="cancel" type="button" onclick="closePopup()">Close</button></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div><button class="button1" id="reg" type="submit" name="reg_btn">Register</button></div>

    </div>
      
              </form> 
         
            <br>
      <br>
      <br>
      <br>
      <br>

</div>

<!-- ............. -->
    </section>
    <script>
            let popup = document.getElementById("popup");

            function openPopup() {
                popup.classList.add("open_popup")
            }
            function closePopup() {
                popup.classList.remove("open_popup")
            }

    </script>


    </body>
</html>

        


        

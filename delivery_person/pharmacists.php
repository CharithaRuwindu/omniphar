<?php
    require_once('dbconn.php');
      
    require_once('header.php');
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
        <button class="addcstmrbtn" onclick="openPopup()">Register a new pharmacist </button>

        <br><br><br>
      
        <?php
        $query="select * from pharmacist";
        $result= mysqli_query($conn,$query);  
                        while($row = mysqli_fetch_assoc($result))
                        {
                            $pid=$row['ID'];
                    ?>

          <div class="mytbl">
          
            <div class="item1"><a href="pharmacist_profile.php?pid=<?php echo $row['ID'];?>" style="text-decoration:none"><?php echo $row['ID']; ?></a></div>
            <div class="item2"><a href="pharmacist_profile.php?pid=<?php echo $row['ID'];?>" style="text-decoration:none"><?php echo $row['First_name']; ?> <?php echo $row['Last_name']; ?></a></div>
          
          </div>

      
        <?php
      }
                ?>
<!-- Popup -->
<div class="popup" id="popup">
      <form class="form1" action="" method="POST">
              <div class="title">
                <i class="fas fa-pencil-alt"></i> 
                <h2>Register the Pharmacist here</h2>
              </div>
              <div class="info">
                <label>First Name</label>
                <input class="input1" type="text" name="fname" placeholder="Enter pharmacist's first name.">
                <label>Last Name</label>
                <input class="input1" type="text" name="lname" placeholder="Enter pharmacist's last name.">
                <label>Address</label>
                <input class="input1" type="text" name="address" placeholder="Enter address of the pharmacist">
                <label>Contact Information (phone number, email)</label>
                <input class="input1" type="text" name="contact" placeholder="Enter Contact Information here.">
                <label>Email</label>
                <input class="input1" type="email" name="email" placeholder="Enter email here.">
                <label>Password</label>
                <input class="input1" type="password" name="pass1" placeholder="Enter password.">
                <label>Confirm Password</label>
                <input class="input1" type="password" name="pass2" placeholder="Re enter password.">
                <button class="button1" type="submit" name="reg_btn">Register</button><BR><BR>
                <button class="button1" type="button" onclick="closePopup()">Close</button>
                <div class="error"><span class = "error"><?php echo $err ?></span></div><br>
                <div class="success"><span class = "success"><?php echo $suc ?></span></div><br>
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

        


        

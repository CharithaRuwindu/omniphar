<?php
require_once('dbconn.php');
    require_once('header-1.php');
    require_once('navbar.php');
    require_once('add_rider.php');


?>

<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" href="css/delivery_persons.css" type="text/css">
    </head>

	<body> 
    <section class="home">
    <div class="div1">
        <div>
            <h1>Delivery Persons</h1>
        </div>
        <button class="addcstmrbtn" onclick="window.location.href = 'rider_requests.php';">Go to deliveryperson requests</button><br>
        <button class="addcstmrbtn" onclick="openPopup()";>Add a new deliveryperson</button>

        <br><br>

       <table class="mytbl">
          <tr>
            <th>Deliveryperson ID</th>
            <th>Name</th>
            <th>License plate Number</th>
            <th>Contacts</th>
          </tr>
          <?php
          $query="select * from delivery_person";
          $result= mysqli_query($conn,$query);
          
                        while($row = mysqli_fetch_assoc($result))
                        {
                            $rid=$row['ID'];
                    ?>
                    <tr>
                    <td> <?php echo $row['ID']; ?></td>
                    <td> <?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></td>
                    <td> <?php echo $row['license_plate']; ?></td>
                    <td> <?php echo $row['Contact']; ?></td>
                    <td><a href="rider_profile.php?rid=<?php echo $row['ID'];?>" class = "a1"> Go to Profile </a></td>
                    <td><a href="del_rider_window.php?rid=<?php echo $row['ID'];?>" class = "a1">Delete</a>

                    <td><a href="add_rider.php?ID=<?php echo $row['ID'];?>" class = "a2">Delete</a>
</td>
                </tr>
                    <?php
                    }
                ?>
          <tbody>
          </tbody>
       </table>


            <div class="popup" id="popup">
            <div class="div2">

            <form class="form1" action="delivery_persons.php" method="POST">
            <a  class ="iconcls" onclick="closePopup()"><i class='bx bx-window-close'></i></a>
          <div class="title">
            <i class="fas fa-pencil-alt"></i> 
            <h2>Register the delivery person here</h2>
          </div>
          <div class="info">
            <label>First name</label>
            <input class="input1" type="text" name = "fname" placeholder="Enter Full name here.">
            <label>Last name</label>
            <input class="input1" type="text" name = "lname" placeholder="Enter Last name here.">
            <label>Email</label>
            <input class="input1" type="text" name = "email" placeholder="Enter Email here.">
            <label>NIC Number</label>
            <input class="input1" type="text" name = "nic" placeholder="Enter NIC Number here.">
            <label>Age</label>
            <input class="input1" type="text" name = "age" placeholder="Enter Age here.">
            <label>Address</label>
            <input class="input1" type="text" name = "address" placeholder="Enter Address here.">
            <label>Phone number</label>
            <input class="input1" type="text" name = "contact" placeholder="Enter Phone number here.">
            <label>Vehicle Type</label>
            <input class="input1" type="text" name = "vtype" placeholder="Enter Vehicle Type here.">
            <label>Profile image:-</label>
            <input class="input1" type="file" accept="image/*" name="pimage" autocomplete="off" placeholder="Enter Vehicle Type here.">
            <label>License plate Number</label>
            <input class="input1" type="text" name = "lno" placeholder="Enter License Plate Number here.">
            <label>Photo of driving license</label>
            <div>Front:<input class="input1" type="file" accept="image/*" placeholder="Insert  image" name="dfimage" autocomplete="off"></div><br>
            <div>Back:<input class="input1" type="file" accept="image/*" placeholder="Insert  image" name="dbimage" autocomplete="off"></div>
            <label>Password</label>
            <input class="input1" type="password" name = "pass1" placeholder="Enter Password here.">
            <label>Re enter the password</label>
            <input class="input1" type="password" name = "pass2" placeholder="Re enter the password here.">

            
          <button type="submit" name="reg_btn">Register</button><br>
          <button c type="button" onclick="closePopup()">Close</button>
          <br>
          

        </form>
          
</div><br>
         
            </div>
            <br>
          <br>
          <br>
          <br>
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
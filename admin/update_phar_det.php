<?php
    require_once('header-1.php');
    require_once('navbar.php');
    require_once('dbconn.php');

?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="css/update_phar_det.css" type="text/css">
  <title>del</title>
</head>

<body>
  <section class="home">





    <div class="container"><center>
      <div class="popup" id="popup">
        <div class="div2">

          <form class="form1" action="phar_det_edit.php" method="post">

            <div class="info">
              <?php
                  $query1="select * from pharmacy_info";
                  $result1= mysqli_query($conn,$query1); 
                  $row = mysqli_fetch_assoc($result1)
                    ?>
             <div> <label>pharmacy Name:</label>
              <input class="input1" type="text" name="pname" value="<?php echo $row['pname']; ?>"><br>
              <label>contact number:</label>
              <input class="input1" type="text" name="contact" value="<?php echo $row['contact']; ?>"><br>
              <label>Email:</label>
              <input class="input1" type="email" name="email" value="<?php echo $row['email']; ?>"><br>
              <label>Address:</label>
              <input class="input1" type="text" name="address" value="<?php echo $row['address']; ?>"><br>
             <button class="addcstmrbtn"  type="submit" name="update">Update</button>
              <a href = "dashboard.php"><button class="addcstmrbtn" type="button" >Close</button></a>

            </div>
          </form>
        </div>
      </div></center>
    </div>

  </section>
</body>

</html>
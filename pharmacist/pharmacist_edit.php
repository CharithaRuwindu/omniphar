<?php 
require_once('dbconn.php');
require_once('header.php'); 
require_once('navbar.php');

$uid = $_SESSION['uid'];
$query = "SELECT * from user where id='$uid'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);


if (isset($_POST['Update'])){
    // var_dump($_POST);exit;
     // Get form data
      $firstname = $_POST['first'];
      $lastname = $_POST['last'];
      $address = $_POST['address'];
      $nic = $_POST['nic'];

      // Update medicine data in database
      $sql = "UPDATE user SET firstname='$firstname', lastname='$lastname',   address='$address' ,   nic='$nic'  WHERE id='$uid'";
      $result= mysqli_query($conn,$sql);
      if ($result) {
          // Redirect to a specific page
          header("Location: d_profile.php");
          exit();
      } else {
          echo "Error updating record: " . mysqli_error($conn);
      }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Side Navbar - Tivotal</title>
    <link rel="stylesheet" href="css/med_edit.css" />
    <script src="https://kit.fontawesome.com/2816eb5ad3.js" crossorigin="anonymous"></script>
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
</head>
<body>
  <section class="home">
    <div class="body">
      <!-- Main -->
      <main class="main-container">
        <div class="main-title">
          <p class="font-weight-bold">EDIT PROFILE</p>
        </div>
        <div class="form1">
          <div class="container">
            <form action="" method="POST">

              <label for="first">First Name : </label>
              <input type="text" id="first" name="first" placeholder="" value="<?php echo $row['firstname']; ?>">

              <label for="last">Last Name : </label>
              <input type="text" id="last" name="last" placeholder="" value="<?php echo $row['lastname']; ?>">

              <label for="address">Address : </label>
              <input type="text" id="address" name="address" placeholder="" value="<?php echo $row['address']; ?>">

              <label for="nic">NIC : </label>
              <input type="text" id="nic" name="nic" placeholder="" value="<?php echo $row['nic']; ?>">

    
    
    <input type="submit" value="Update" name="Update">
    <a href="d_profile.php"><input type="button" value="Cancel"></a>
    <br><br><br><br><br></form>
</div>
</div>
      </div>
    </section>

  </body>
</html>

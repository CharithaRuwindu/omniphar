<?php 
require_once('dbconn.php');
require_once('header.php');
require_once('navbar.php');

// Get medicine ID from URL parameter
$id = $_GET['id'];

// Get medicine data from database
$query = "SELECT * from item where med_Id='$id'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])){
     // Get form data
      $price = $_POST['price'];
      $description = $_POST['description'];
      $reorder = $_POST['reorder'];
      $quantity = $_POST['quantity'];

      // Update medicine data in database
      $sql = "UPDATE item SET price='$price', description='$description', reorder='$reorder', quantity='$quantity' WHERE med_Id='$id'";
      $result2= mysqli_query($conn,$sql);
      if ($result2) {
          // Redirect to a specific page
          header("Location: all_med.php");
          exit();
      } else {
          echo "Error updating record: ";
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
    <link rel="stylesheet" href="css/edit_device.css" />
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
          <p class="font-weight-bold">EDIT MEDICAL DEVICES</p>
        </div>
        <div class="form1">
          <div class="container">
            <form action="all_devices.php" method="POST">

             <label for="dname"><?php echo $row['name']; ?></label><br><br>

              <label for="price">Price(Rs.)</label>
              <input type="text" id="price" name="price" placeholder="" value="<?php echo $row['price']; ?>">
              
              <label for="description">Description</label>
              <textarea placeholder="Add a description" name="description"><?php echo $row['description']; ?></textarea><br>

              <label for="description">Reorder limit</label>
              <textarea placeholder="" name="reorder"><?php echo $row['reorder']; ?></textarea><br>

              <label for="description">Quantity</label>
              <textarea placeholder="" name="quantity"><?php echo $row['quantity']; ?></textarea><br>
  
    <input type="submit" value="Update" name="submit">
    <a href="all_devices.php"><input type="button" value="Cancel"></a>
    <br><br><br><br><br></form>
</div>
</div>
      </div>
    </section>

  </body>
</html>

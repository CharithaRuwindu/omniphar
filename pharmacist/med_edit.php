<?php 
require_once('dbconn.php');
require_once('header.php');
require_once('navbar.php');

// Get medicine ID from URL parameter
$med_Id = $_GET['med_Id'];

// Get medicine data from database
$query = "SELECT * from item where med_Id='$med_Id'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);

if (isset($_POST['Update'])){
     // Get form data
      $price = $_POST['price'];
      $per = $_POST['per'];
      $description = $_POST['description'];

      // Update medicine data in database
      $sql = "UPDATE item SET price='$price', per='$per',  description='$description' WHERE med_Id='$med_Id'";
      $result= mysqli_query($conn,$sql);
      if ($result) {
          // Redirect to a specific page
          header("Location: all_med.php");
          
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
          <p class="font-weight-bold">EDIT MEDICINE</p>
        </div>
        <div class="form1">
          <div class="container">
            <form action="" method="POST">

             <label for="dname"><?php echo $row['name']; ?></label><br><br>

              <label for="price">Price(Rs.)</label>
              <input type="text" id="price" name="price" placeholder="" value="<?php echo $row['price']; ?>">
              
              <label for="per">Per</label>
              <select id="per" name="per">
                <option value="Tablet/Capsule" <?php if($row['per'] == 'Tablet/Capsule') echo 'selected'; ?>>Tablet/Capsule</option>
                <option value="Card" <?php if($row['per'] == 'Card') echo 'selected'; ?>>Card</option>
                <option value="Box" <?php if($row['per'] == 'Box') echo 'selected'; ?>>Box</option>
                <option value="Item" <?php if($row['per'] == 'Item') echo 'selected'; ?>>Item</option>
              </select><br>

    <label for="description">Description</label>
    <textarea placeholder="Add a description" name="description"><?php echo $row['description']; ?></textarea><br>
  
    <input type="submit" value="Update" name="Update">
    <a href="all_med.php"><input type="button" value="Cancel"></a>
    <br><br><br><br><br></form>
</div>
</div>
      </div>
    </section>

  </body>
</html>

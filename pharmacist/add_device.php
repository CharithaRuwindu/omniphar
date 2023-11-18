<?php
    require_once('header.php');
    require_once('navbar.php');
    require_once('dbconn.php');

    $name = $_POST['name'];
    $brand = $_POST['brand'];
    $price = $_POST['price'];
    $reorder = $_POST['reorder'];
    $category = $_POST['category'];
    $sub_category = $_POST['sub_category'];
    $description = $_POST['description'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Side Navbar - Tivotal</title>
    <link rel="stylesheet" href="css/add_device.css" />
    <script src="https://kit.fontawesome.com/2816eb5ad3.js" crossorigin="anonymous"></script>
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
  <section class="home">
      <div class="body">

      <?php   

    $stmt = $conn->prepare("insert into item(name,brand,price,reorder,category,sub_category, description)
    values(?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssss",$name,$brand,$price,$reorder,$category,$sub_category,$description);
    $stmt ->execute();
    // header("location:add_med_more.php");

?>
  
  <!-- Main -->
  <main class="main-container">
        <div class="main-title">
          <p class="font-weight-bold">ADD MEDICAL DEVICE</p>
        </div>

  
  </div>
    <div class="form1">
      <div class="image">
</div>
<div class="container">
  <form action="add_device.php" method="post">
    <label for="dname">Official/Common name of the product</label>
    <input type="text" id="name" name="name" placeholder=""><br>

    <label for="bname">Brand name (if applicable)</label>
    <input type="text" id="brand" name="brand" placeholder=""><br>

    <label for="model">Model (if applicable)</label>
    <input type="text" id="model" name="model" placeholder="">
    
    <label for="size">Sizes (if applicable)</label>
    <input type="text" id="size" name="size" placeholder=""><br>

    <label for="price">Total cost</label>
    <input type="text" id="price" name="price" placeholder=""><br>

    <label for="reorder">Re-order Level</label>
    <input type="text" id="reorder" name="reorder" placeholder=""><br>
    
    <label for="image">Add Image</label>
    <input type="file" id="myFile" name="myfile"><br>

    <label for="category">Category</label>
    <select id="category" name="category">
      <option value="devices" selected>Health Devices</option>
      <option value="first_aid">First Aid</option>
      <option value="sports">Sports & Braces</option>
    </select><br>

    <label for="description">Description</label>
    <textarea placeholder="Add a description" name="description"></textarea><br>
  
    <input type="submit" value="Confirm">
    <a href="add_device.php"><input type="button" value="Cancel"></a>
    <br><br><br><br><br>
  </form>
</div>
</div>
    
      </div>
    </section>
  
  </body>
</html>

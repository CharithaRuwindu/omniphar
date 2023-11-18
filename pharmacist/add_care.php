<?php
    require_once('header.php');
    require_once('navbar.php');
    require_once('dbconn.php');

    $name = $_POST['name'];
    $brand = $_POST['brand'];
    $price = $_POST['price'];
    $form = $_POST['form'];
    $reorder = $_POST['reorder'];
    $category = $_POST['category'];
    $description = $_POST['description'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Side Navbar - Tivotal</title>
    <link rel="stylesheet" href="css/add_care.css" />
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
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}else{
    $stmt = $conn->prepare("INSERT into personal_care(name,brand,price,form,reorder,category,description)
    values(?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssss",$name,$brand,$price,$form,$reorder,$category,$description);
    $stmt ->execute();
    // header("location:add_med_more.php");
    $stmt->close();
    $conn -> close();
}
?>
   <!-- Main -->
   <main class="main-container">
        <div class="main-title">
          <p class="font-weight-bold">ADD PRODUCT</p>
        </div>

    <div class="form1">
      
<div class="container">
  <form action="add_care.php" method="post">
    <label for="dname">Product Name</label>
    <input type="text" id="name" name="name" placeholder=""><br>

    <label for="bname">Brand Name</label>
    <input type="text" id="brand" name="brand" placeholder=""><br>

    <label for="price">Price(Rs.)</label>
    <input type="text" id="price" name="price" placeholder="">
    
    <label for="form">Medication form</label>
    <select id="form" name="form">
      <option value="Oinment" selected>Oinment</option>
      <option value="Cream">Cream</option>
      <option value="Gel">Gel</option>
      <option value="Paste">Paste</option>
      <option value="Poultices">Poultices </option>
      <option value="Topical powders">Topical powders</option>
      <option value="Medicated plasters">Medicated plasters</option>
      <option value="Other">Other</option>
    </select><br>

    <label for="reorder">Re-order Level</label>
    <input type="text" id="reorder" name="reorder" placeholder="">

    <label for="image">Add Image</label>
    <input type="file" id="myFile" name="myfile"><br>
  
    <label for="category">Category</label>
    <select id="category" name="category">
      <option value="Skin Care" selected>Skin Care</option>
      <option value="Body Care">Body Care</option>
      <option value="Nourishment">Nourishment</option>
      <option value="Oral Care">Oral Care</option>
      <option value="Hands & Foot Care">Hands & Foot Care</option>
    </select><br>

    <label for="description">Description</label>
    <textarea placeholder="Add a description" name="description"></textarea><br>
  
    <input type="submit" value="Confirm">
    <a href="add_med.php"><input type="button" value="Cancel"></a>
    <br><br><br><br><br></form>
</div>
</div>
      </div>
    </section>
  
  </body>
</html>

<?php
require_once('header.php');
require_once('navbar.php');
require_once('dbconn.php');

if(isset($_POST['submit'])) {

$name = $_POST['name'];
$brand = $_POST['brand'];
$price = $_POST['price'];
$per = $_POST['per'];
$quantity = $_POST['quantity'];
$reorder = $_POST['reorder'];
$category = $_POST['category'];
$description = $_POST['description'];

if(!empty($name) && !empty($brand) && !empty($price) && !empty($per) && !empty($quantity) && !empty($reorder) && !empty($category) && !empty($description)) {
  if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
  } else {
    $stmt = $conn->prepare("INSERT INTO medicine(name, brand, price, per, quantity, reorder, category, description) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $name, $brand, $price, $per, $quantity, $reorder, $category, $description);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    header("Location: add_med1.php");
    exit();
  }
} else {
  echo "Please fill all fields.";
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
    <link rel="stylesheet" href="css/add_med.css" />
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
          <p class="font-weight-bold">ADD MEDICINE</p>
        </div>


    <div class="form1">

<div class="container">
  <form action="add_med1.php" method="post">
    <label for="dname">Drug Name</label>
    <input type="text" id="name" name="name" placeholder="Enter drug name"><br>

    <label for="bname">Brand Name</label>
    <input type="text" id="brand" name="brand" placeholder="Enter brand name"><br>

    <label for="price">Price(Rs.)</label>
    <input type="text" id="price" name="price" placeholder="Enter price here">
    
    <label for="per">Per</label>
    <select id="per" name="per">
      <option value="Tablet/Capsule" selected>Tablet/Capsule</option>
      <option value="Card">Card</option>
      <option value="Box">Box</option>
      <option value="Item">Item</option>
    </select><br>
  
    <label for="quantity">Quantity</label>
    <input type="text" id="quantity" name="quantity" placeholder="Enter quantity">

    <label for="level">Re-order level</label>
    <input type="text" id="reorder" name="reorder" placeholder="Enter re-order level">

    <label for="image">Add Image</label>
    <input type="file" id="myFile" name="myfile"><br>

    <label for="category">Category</label>
    <select id="category" name="category">
      <option value="heart" selected>Heart</option>
      <option value="central_nervous_system">Central Nervous System</option>
      <option value="eye">Eye</option>
      <option value="diabetes">Diabetes</option>
      <option value="nose_ear_throat">Nose,Ear,Throat</option>
      <option value="infection">Infection</option>
      <option value="muscle">Muscle & Joint</option>
      <option value="others">Other</option>
    </select><br>

    <label for="description">Description</label>
    <textarea placeholder="Add a description" name="description"></textarea><br>
  
    <input type="submit" value="Save">
    <a href="add_med_more.php"><input type="button" value="Cancel"></a>
    <br><br><br><br><br></form>
</div>
</div>
      </div>
    </section>
  
  </body>
</html>



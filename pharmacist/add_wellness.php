<?php
    require_once('header.php');
    require_once('navbar.php');
    require_once('dbconn.php');
    require_once('pro_add_wellness.php');
    

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

    <main class="main-container">
        <div class="main-title">
          <p class="font-weight-bold">ADD WELLNESS PRODUCTS</p>
        </div>


    <div class="form1">

<div class="container">
  <form action="" method="post" enctype="multipart/form-data">
    <label for="dname">Wellness Product Name</label>
    <input type="text" id="name" name="name" placeholder="Enter wellness product name" required><br>

    <label for="bname">Brand/ Maufactured Company</label>
    <input type="text" id="brand" name="brand" placeholder="Enter brand name" required><br>

    <label for="price">Price(Rs.)</label>
    <input type="text" id="price" name="price" placeholder="Enter price here" required>
    
    <label for="per">Per</label>
    <select id="per" name="per" required>
      <option value="Item" selected>Item/ Product</option>
    </select><br>

    <label for="level">Re-order level</label>
    <input type="text" id="reorder" name="reorder" placeholder="Enter re-order level" required>

    <label for="quantity">Quantity</label>
    <input type="text" id="quantity" name="quantity" placeholder="Enter quantity" required>

    <label for="image">Add Image</label>
    <input type="file" id="myFile" name="myfile" required><br>

    <label for="category">Category</label>
    <select id="category" name="category" required>
      <option value="Diet and Nutritions" selected>Diet and Nutritions</option>
      <option value="Mother and Baby item">Mother and Baby item</option>
      <option value="Allergy">Allergy</option>
      <option value="Pain and fever">Pain and fever</option>
      <option value="Preventive care">Preventive care</option>
    </select><br>

    <label for="description">Description</label>
    <textarea placeholder="Add a description" name="description" required></textarea><br>
  
    <input type="submit" value="Submit" name="submit">
    <br><br><br><br><br></form>
</div>
</div>
      </div>
    </section>
  
  </body>
</html>
<?php
    require_once('header-1.php');
    require_once('navbar.php');
    require_once('dbconn.php');
    require_once('add_med.php');
?>

<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" href="css/add_new_medicine.css" type="text/css">
    </head>

	<body> 
    <section class="home">
    

    <div class="body">
        
        <h1>Medicine Details</h1>
        
        </div>
          <div class="form">
            <div class="image">
      </div>
      <div class="container">
      <form action="" method="POST">
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
  
    <input type="submit" value="Submit" name="med_sub">
    <a href="add_new_medicine.php"><input type="button" value="Cancel"></a>
    <br><br><br><br><br></form>
    
      </div>
      </div>
            </div>
    </section>
    </body>
</html>

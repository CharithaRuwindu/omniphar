<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add medicine</title>
<link rel="stylesheet" href="add_med.css"> 
    <script src="https://kit.fontawesome.com/14a965c2a0.js" crossorigin="anonymous"></script>  
    </head>
    <body class="body">
  <div class="topnav"> 
    <div class="search-container">
      <div class="logo">
        <img src="logo1.png" alt="logo">
      </div>

        <button type="button">logout</button>

      <div class="user">
        <img src="user.png" alt="user">
      </div>
      <div class="back">
      <a href="med_tbl.php"><img src="back.png"  alt="back"></a>
      </div>
    </div>
  </div>
  <div class="title">
  <h1>Medicine Details</h1>
  <button type="button" class="med-button"><a href="med_tbl.php">All medicine</a></button>
  </div>
    <div class="form">
      <div class="image">
</div>
<div class="container">
  <form action="connection.php" method="post">
    <label for="dname">Drug Name</label>
    <input type="text" id="name" name="name" placeholder=""><br>

    <label for="bname">Brand Name</label>
    <input type="text" id="brand" name="brand" placeholder=""><br>

    <label for="category">Category</label>
    <select id="category" name="category">
      <option value="Medicine" selected>Medicine</option>
      <option value="Medical devices">Medical devices</option>
      <option value="Personal care">Personal care</option>
      <option value="Wellness">Wellness</option>
      <option value="Other">Other</option>
    </select><br>

    <label for="price">Price(Rs.)</label>
    <input type="text" id="price" name="price" placeholder="">
    
    <label for="per">Per</label>
    <select id="per" name="per">
      <option value="Tablet/Capsule" selected>Tablet/Capsule</option>
      <option value="Card">Card</option>
      <option value="Box">Box</option>
      <option value="Item">Item</option>
    </select><br>
  
    <label for="description">Description</label>
    <textarea placeholder="Add a description" name="description"></textarea><br>
  
    <input type="submit" value="Confirm">
    <a href="add_med.php"><input type="button" value="Cancel"></a>
    </form>
</div>
</div>
</body>
</html>
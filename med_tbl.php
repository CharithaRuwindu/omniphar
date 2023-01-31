<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All medicine</title>
<link rel="stylesheet" href="med_tbl.css"> 
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
      <a href="add_med.php"><img src="back.png"  alt="back"></a>
      </div>
    </div>
  </div>

  <div class="title">
  <h1>Medicine Details</h1>
  <button type="button" class="med-button"><a href="add_med.php">Add medicine</a></button>
  </div>
<br>
  <div class="table">
  <table>
  <tr>
    <th>Medicine ID</th>
    <th>Name</th>
    <th>Brand</th>
    <th>Category</th>
    <th>Price(Rs.)</th>
    <th>Per</th>
    <th>Description</th>
  </tr>

  <tbody>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "omniphar";

    $connection = new mysqli($servername, $username, $password, $database);

    if($connection->connect_error){
        die("Connection failed: " . $connection->connect_error);
    }

    $sql = "SELECT * FROM medicine";
    $result = $connection ->query($sql);

    if(!$result){
        die("Invalid query: " . $connection->error);
    }

    while($row = $result->fetch_assoc()){
    echo "<tr>
    <td>" . $row["med_Id"] . "</td>
    <td>" . $row["name"] . "</td>
    <td>" . $row["brand"] . "</td>
    <td>" . $row["category"] . "</td>
    <td>" . $row["price"] . "</td>
    <td>" . $row["per"] . "</td>
    <td>" . $row["description"] . "</td>
  </tr>";
    }

  ?>
  </tbody>
</table>
  </div>
</body>
</html>
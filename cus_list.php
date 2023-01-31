<html>
    <head>
    <title>Customer list</title>
    <link rel="stylesheet" href="cus_list.css"> 
    <script src="https://kit.fontawesome.com/14a965c2a0.js" crossorigin="anonymous"></script>  
    </head>
    <body>
    <div class="topnav"> 
  <a href="order_list.php">Order</a>
  <a href="med_list.php">Medicine</a>
  <a class="active" href="cus_list.php">Customer</a>
  <div class="search-container">
    <form action="">
      <img src="logo1.png" alt="logo">
      <button type="button">logout</button>
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
  </div>
<h1><b>Customer List</b></h1>
<br><table>
  <tr>
    <th>Customer ID</th>
    <th>Name</th>
    <th>Address</th>
    <th>Contact</th>
    <th></th>
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

    $sql = "SELECT * FROM customer";
    $result = $connection ->query($sql);

    if(!$result){
        die("Invalid query: " . $connection->error);
    }

    while($row = $result->fetch_assoc()){
    echo "<tr>
    <td>" . $row["Id"] . "</td>
    <td>" . $row["name"] . "</td>
    <td>" . $row["address"] . "</td>
    <td>" . $row["contact"] . "</td>
    
  </tr>";
    }
    ?>
    </tbody>
</table>
    </body>  
</html>



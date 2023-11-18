<?php
    require_once('dbconn.php');
    require_once('header.php');
    require_once('navbar.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Side Navbar - Tivotal</title>
    <link rel="stylesheet" href="css/cus_list.css" />
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
          <p class="font-weight-bold">CUSTOMERS</p>
        </div>
      <hr>
<br>

  <table class="table1">
  <tr>
  <th>Customer ID</th>
  <th>First Name</th>
  <th>Last Name</th>
  <th>Address</th>
  <th>Contact</th>
  <th></th>
  </tr>

<?php

// Prepare and execute SQL query
$sql = "SELECT * FROM user where role = 'customer'";
$result = mysqli_query($conn, $sql);
// Check if any row is returned

if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)){
echo "
    <tr>
        <td>{$row['id']}</td>
        <td>{$row['firstname']}</td>
        <td>{$row['lastname']}</td>
        <td>{$row['address']}</td>
        <td>{$row['contact']}</td>
        <td>
            <a type='button' class='button' href='cus_profile.php?id={$row['id']}'>Details</a>
        </td>
    </tr>
";}
} else {
echo "No record found!";
}

 ?> 

</table>
<br><br>
      </div>
    </section>
  
  </body>
</html>

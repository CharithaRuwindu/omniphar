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
    <meta name="viewport" content="wIDth=device-wIDth, initial-scale=1.0" />
    <title>SIDe Navbar - Tivotal</title>
    <link rel="stylesheet" href="css/rIDer_list.css" />
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
          <p class="font-weight-bold">DELIVERY PERSONS</p>
        </div>
        <div>
        <a href="leavereq.php"><button type="button" class="request-button">Leave Requests</button></a>
        </div>

<hr>
      
<br>

  <table class="table1">
  <tr>
  <th>Rider ID</th>
  <th>First Name</th>
  <th>Last Name</th>
  <th>NIC</th>
  <th>Contact</th>
  <th style="width:15%;"></th>
  </tr>

  <?php

// Prepare and execute SQL query
$sql = "SELECT * FROM user where role ='delivery_person'";
$result = mysqli_query($conn, $sql);
// Check if any row is returned

if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)){
echo "
    <tr>
        <td>{$row['id']}</td>
        <td>{$row['firstname']}</td>
        <td>{$row['lastname']}</td>
        <td>{$row['nic']}</td>
        <td>{$row['contact']}</td>
        <td>
            <a type='button' class='button1' href='rider_profile.php?ID={$row['id']}'>Details</a>
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

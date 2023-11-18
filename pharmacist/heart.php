<?php
    require_once('header.php');
    require_once('navbar.php');
    require_once('dbconn.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Side Navbar - Tivotal</title>
    <link rel="stylesheet" href="css/heart.css" />
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
        <div class="main-title">
          <a href="heart.php"><span class="bx bxs-heart bx-burst text-red" ></span></a>
          <p class="font-weight-bold">HEART DISEASES</p><br>
          </div>
          <span class="main-title mini-title">Medication for heart diseases</span>

      <table class="table1">
  <tr>
  <th></th>
  <th></th>
  </tr>

  <?php

  // Prepare and execute SQL query
  $sql = "SELECT * from item where sub_category='heart'";
  $result = mysqli_query($conn, $sql);
// Check if any row is returned

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)){
  echo "
      <tr>
          <td><a href='med_profile.php?med_Id={$row['med_Id']}'>{$row['name']}</a></td>
      </tr>
  ";}
} else {
  echo "No record found!";
}

 ?>  

</table>
      </div>
    </section>

  
  </body>
</html>

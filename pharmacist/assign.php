<?php
    require_once('dbconn.php');
    require_once('header.php');
    require_once('navbar.php');

    $oid = $_GET['id'];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Side Navbar - Tivotal</title>
    <link rel="stylesheet" href="css/assign.css" />
    <script src="https://kit.fontawesome.com/2816eb5ad3.js" crossorigin="anonymous"></script>
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

  </head>
  <body>
    <section class="home">
    <div class="content">

     <!-- Main -->
     <main class="main-container">
        <div class="main-title">
          <p class="font-weight-bold">DELIVERY PERSONS</p>
        </div>

        <table class="table1">
  <tr>
  <th>Rider ID</th>
  <th>First Name</th>
  <th>Last Name</th>
  <th>Vehicle Type</th>
  <th>Contact</th>
  <th></th>
  </tr>

  <?php

// Prepare and execute SQL query
$sql = "SELECT * FROM user where role='delivery_person'";
$result = mysqli_query($conn, $sql);
// Check if any row is returned

if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)){

  $query2 = "SELECT * FROM delivery_person WHERE d_id='{$row['id']}'";
  $result2 = mysqli_query($conn,$query2);
  $row2 = mysqli_fetch_assoc($result2);

  $query3 = "SELECT * FROM leave_request WHERE d_id='{$row['id']}'";
  $result3 = mysqli_query($conn,$query3);
  $availability ='yes';

  while($row3 = mysqli_fetch_assoc($result3))
  {
  $first_date = $row3['from_date'];
  $second_date = $row3['to_date'];

  $query4 = "SELECT * FROM orders WHERE id='$oid'";
  $result4 = mysqli_query($conn,$query4);
  $row4 = mysqli_fetch_assoc($result4);
  $date = $row4['order_date'];
  $new_date = date('Y-m-d', strtotime($date . ' +3 days'));

  if (strtotime($new_date) > strtotime($first_date) && strtotime($new_date) < strtotime($second_date)) {
    $availability = 'no';
  }
  }

  if($availability == 'yes')
  {
?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['firstname']; ?></td>
        <td><?php echo $row['lastname']; ?></td>
        <td><?php echo $row2['vehicle_type']; ?></td>
        <td><?php echo $row['contact']?></td>
        <td><a type='button' class='button1' href='pro_assign.php?id=<?php echo $row['id']; ?>&oid=<?php echo $oid; ?>'>Assign</a></td>

    </tr>
<?php
  }
  }
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
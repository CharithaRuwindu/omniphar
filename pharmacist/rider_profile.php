<?php
    require_once('dbconn.php');
    require_once('header.php');
    require_once('navbar.php');

    $ID = $_GET['ID'];

    $query = "SELECT * from user where role ='delivery_person' && id ='$ID'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Side Navbar - Tivotal</title>
    <link rel="stylesheet" href="css/rider_profile.css" />
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
        <p class="font-weight-bold">RIDER PROFILE</p>
      </div>

      <br><br><br>

        <div class="wrapper">
  <div class="box">

  <!-- PROFILE INFORMATION -->
<input checked="checked" ID="box1" name="box" type="radio"> 
<label for="box1">Profile</label>
<div class="content">
<div class="grid-container">
  <div class="grid-item">

  <div class="profile_img"><img src="assets/userlogo.jpg" alt=""></div>
  <span class="rname">Theekshani Buddhima</span>
  <div class="rating"><p>Ratings:</p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></div>
        <div class="profile_info">
        <table>
            <tr>
                <td class="first"><label>User ID : </label></td>
                <td class="second"><?php echo $ID; ?></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td><label>NIC : </label></td>
                <td class="second"><?php echo $row['nic']; ?></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td><label>Address : </label></td>
                <td class="second"><?php echo $row['address']; ?></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td><label>Contact : </label></td>
                <td class="second"><?php echo $row['contact']; ?></td>
            </tr>
        </table>
        </div>
        </div>
</div>
</div>

<!-- CUSTOMER ORDERS -->

<input ID="box2" name="box" type="radio"> 
<label for="box2">Orders</label>
<div class="content">
<div class="grid-container">
  <div class="grid-item">
  <div class="mini-title">
          <p class="font-weight-bold">Rider Orders</p>
        </div>
        <table class="table1">
      <tbody>
        <tr>
  <th>Order ID</th>
  <th>Address</th>
  <th>Customer ID</th>
  <th>Price</th>
  <th>Status</th>
  </tr>

  <?php
   $query="SELECT * from orders WHERE delivery_person_id='$ID'";
   $result= mysqli_query($conn,$query);
                        while($row = mysqli_fetch_assoc($result))
                        {
                    ?>
                    <tr>
                    <td> <?php echo $row['id']; ?></td>
                    <td> <?php echo $row['address']; ?></td>
                    <td> <?php echo $row['customer_id']; ?></td>
                    <td> <?php echo $row['price']; ?></td>
                    <td> <?php echo $row['status']; ?></td>
                    </tr>
                    <?php
                    }
                ?>  
      </tbody>
   </table>
  </div>  
</div>
</div>

 <br><br><br>
    </section>
</body>
</html>
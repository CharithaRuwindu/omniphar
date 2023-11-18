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
    <link rel="stylesheet" href="css/order_history.css" />
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
          <p class="font-weight-bold">ORDER HISTORY</p>
        </div>

        <br><br><br>

        <div class="wrapper">
  <div class="box">
<input checked="checked" id="box1" name="box" type="radio"> 
<label for="box1">All Orders</label>
<div class="content">
<div class="grid-container">
  <div class="grid-item">
    <table class="table1">
      <tbody>
        <tr>
  <th>Order ID</th>
  <th>Collect</th>
  <th>Customer ID</th>
  <th>Price</th>
  <th>Delivery Person ID</th>
  <th>Status</th>
  </tr>

  <?php
   $query="select * from orders";
   $result= mysqli_query($conn,$query);
                        while($row = mysqli_fetch_assoc($result))
                        {
                    ?>
                    <tr>
                    <td> <?php echo $row['id']; ?></td>
                    <td> <?php echo $row['prefer']; ?></td>
                    <td> <?php echo $row['customer_id']; ?></td>
                    <td> <?php echo $row['price']; ?></td>
                    <td> <?php echo $row['delivery_person_id']; ?></td>
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

<!-- delivered orders -->

<input id="box2" name="box" type="radio"> 
<label for="box2">Delivered Orders</label>
<div class="content">
<div class="grid-container">
  <div class="grid-item">
    <table class="table1">
      <tbody>
      <tr>
  <th>Order ID</th>
  <th>Address</th>
  <th>Customer ID</th>
  <th>Price</th>
  <th>Delivery Person ID</th>
  </tr>

  <?php
   $query="select * from orders where status ='delivered'";
   $result= mysqli_query($conn,$query);
                        while($row = mysqli_fetch_assoc($result))
                        {
                    ?>
                    <tr>
                    <td> <?php echo $row['id']; ?></td>
                    <td> <?php echo $row['address']; ?></td>
                    <td> <?php echo $row['customer_id']; ?></td>
                    <td> <?php echo $row['price']; ?></td>
                    <td> <?php echo $row['delivery_person_id']; ?></td>
                    </tr>
                    <?php
                    }
                ?>  
       
      </tbody>
   </table>
  </div>  
</div>
</div>

<!-- COMPLETED orders -->

<input id="box3" name="box" type="radio"> 
<label for="box3">Completed Orders</label>
<div class="content">
<div class="grid-container">
  <div class="grid-item">
    <table class="table1">
      <tbody>
      <tr>
  <th>Order ID</th>
  <th>Ordered Date</th>
  <th>Delivered/Completed Date</th>
  <th>Customer ID</th>
  <th>Price</th>
  <th>Delivery Person ID</th>
  </tr>

  <?php
   $query="select * from orders where status ='completed'";
   $result= mysqli_query($conn,$query);
                        while($row = mysqli_fetch_assoc($result))
                        {
                    ?>
                    <tr>
                    <td> <?php echo $row['id']; ?></td>
                    <td> <?php echo $row['order_date']; ?></td>
                    <td> <?php echo $row['delivery_date']; ?></td>
                    <td> <?php echo $row['customer_id']; ?></td>
                    <td> <?php echo $row['price']; ?></td>
                    <td> <?php echo $row['delivery_person_id']; ?></td>
                    </tr>
                    <?php
                    }
                ?>  
       
      </tbody>
   </table>
  </div>  
</div>
</div>

     
<!-- canceled order -->

<input id="box4" name="box" type="radio"> 
<label for="box4">Canceled Orders</label>
<div class="content">
<div class="grid-container">
  <div class="grid-item">
    <table class="table1">
      <tbody>
      <tr>
  <th>Order ID</th>
  <th>Address</th>
  <th>Customer ID</th>
  <th>Price</th>
  <th>Delivery Person ID</th>
  </tr>
      <?php
   $query="select * from orders where status ='canceled'";
   $result= mysqli_query($conn,$query);
                        while($row = mysqli_fetch_assoc($result))
                        {
                    ?>
                    <tr>
                    <td> <?php echo $row['id']; ?></td>
                    <td> <?php echo $row['address']; ?></td>
                    <td> <?php echo $row['customer_id']; ?></td>
                    <td> <?php echo $row['price']; ?></td>
                    <td> <?php echo $row['delivery_person_id']; ?></td>
                    </tr>
                    <?php
                    }
                ?> 
        </tbody>
   </table>
  </div>
</div>
</div>
</div>

<br><br><br>
    </section>
  </body>
</html>

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
    <link rel="stylesheet" href="css/orders.css" />
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
          <p class="font-weight-bold">ORDERS</p>
        </div>
        <div>
          <button type="button" class="order-button"><a href="order_history.php">History</a></button>
        </div>
        <hr>

<br><br><br><br><div class="wrapper">
  <div class="box">


<!-- PROCESSING ORDERS -->
<input checked="checked" id="box1" name="box" type="radio"> 
<label for="box1">Processing Orders</label>
<div class="content">
<div class="grid-container">
  <div class="grid-item">
    <table class="table1">
      <tbody>
      <tr>
  <th>Order ID</th>
  <th>Date</th>
  <th>Address</th>
  <th>Customer ID</th>
  <th>Price</th>
  <th></th>
  </tr>

  <?php
   $query="SELECT * from orders WHERE status ='processing'";
   $result= mysqli_query($conn,$query);
                        while($row = mysqli_fetch_assoc($result))
                        {
                    ?>
                    
                    <td> <?php echo $row['id']; ?></td>
                    <td> <?php echo $row['order_date']; ?></td>
                    <td> <?php echo $row['address']; ?></td>
                    <td> <?php echo $row['customer_id']; ?></td>
                    <td> <?php echo $row['price']; ?></td>
                    <!-- <td><button type="button" class="done-button" name="processing"> <a href="processing.php?id=<?php echo $row['id']; ?>">Done</a></button></td> -->
                    <td><button type="button" class="done-button" name="processing"> <a href="order_details.php?id=<?php echo $row['id']; ?>">Details</a></button></td>
                    </tr>
                    <?php
                    }
                ?>  
        
          
      </tbody>
   </table>
  </div>  
</div>
</div>

<!-- PACKED ORDERS -->

<input id="box2" name="box" type="radio"> 
<label for="box2">Packed Orders</label>
<div class="content">
<div class="grid-container">
  <div class="grid-item">
    <table class="table1">
      <tbody>
        
      <tr>
  <th>Order ID</th>
  <th>Date</th>
  <th>Collect</th>
  <th>Delivery person ID</th>
  <th>Price</th>
  <th></th>
  </tr>

  <?php
   $query="select * from orders where status ='packed'";
   $result= mysqli_query($conn,$query);
                        while($row = mysqli_fetch_assoc($result))
                        {
                    ?>
                    <tr>
                    <td> <?php echo $row['id']; ?></td>
                    <td> <?php echo $row['order_date']; ?></td>
                    <td> <?php echo $row['prefer']; ?></td>
                    <td> <?php echo $row['delivery_person_id']; ?></td>
                    <td> <?php echo $row['price']; ?></td>
                    <td><button type="button" class="done-button" name="packed"> <a href="packed.php?id=<?php echo $row['id']; ?>">Done</a></button></td>
                    </tr>
                    <?php
                    }
                ?>  
        
      </tbody>
   </table>
  </div>   
</div>		
</div>

<!-- DISPATCHED ORDERS -->

<input id="box3" name="box" type="radio"> 
<label for="box3">Dispatched Orders</label>
<div class="content">
<div class="grid-container">
  <div class="grid-item">
    <table class="table1">
      <tbody>
        
      <tr>
  <th>Order ID</th>
  <th>Date</th>
  <th>Address</th>
  <th>Customer ID</th>
  <th>Price</th>
  <th>Delivery Person ID</th>
  </tr>

  <?php
   $query="select * from orders where status ='dispatched'";
   $result= mysqli_query($conn,$query);
                        while($row = mysqli_fetch_assoc($result))
                        {
                    ?>
                    <tr>
                    <td> <?php echo $row['id']; ?></td>
                    <td> <?php echo $row['order_date']; ?></td>
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

<!-- DILIVERED ORDERS

<input id="box5" name="box" type="radio"> 
<label for="box5">Delivered Orders</label>
<div class="content">
<div class="grid-container">
  <div class="grid-item">
    <table class="table1">
      <tbody>
      <tr>
  <th>Order ID</th>
  <th>Order</th>
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
                    <td> <?php echo $row['orders']; ?></td>
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
</div>   -->

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
  <th>Date</th>
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
                    <td> <?php echo $row['order_date']; ?></td>
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

        <!-- ALL ORDERS -->
<input id="box5" name="box" type="radio"> 
<label for="box5">All Orders</label>
<div class="content">
<div class="grid-container">
  <div class="grid-item">
    <table class="table1">
      <tbody>
        <tr>
  <th>Order ID</th>
  <th>Date</th>
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
                    <td> <?php echo $row['order_date']; ?></td>
                    <td> <?php echo $row['prefer']; ?></td>
                    <td> <?php echo $row['customer_id']; ?></td>
                    <td> <?php echo $row['price']; ?></td>
                    <td> <?php echo $row['delivery_person_id']; ?></td>
                    <td> <?php echo $row['status']; ?>
                    </tr>
                    <?php
                    }
                ?>  
      </tbody>
   </table>
   <br><br><br>
  </div>  
</div>
</div>



</div>
</div>
</section>
  </body>
</html>

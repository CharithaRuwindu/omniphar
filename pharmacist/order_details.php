<?php
    require_once('dbconn.php');
    require_once('header.php');
    require_once('navbar.php');

    $id = $_GET['id'];
    $query = "SELECT * from orders where id='$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    $query2 = "SELECT * from order_items where order_id='$id'";
    $result2 = mysqli_query($conn, $query2);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Side Navbar - Tivotal</title>
    <link rel="stylesheet" href="css/order_details.css" />
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
          <p class="font-weight-bold">ORDER DETAILS</p>
        </div>
      <hr>
        <table class="table1">
  <tr>
  <th>Order ID</th>
  <th>Order Date</th>
  <?php if(($row['prefer']=='deliver') && ($row['status']=='processing')){ ?>
    <th>Address</th>
  <?php }else{ ?>
    <th></th>
  <?php } ?>
  <th>Collect</th>
  <?php if(($row['prefer']=='deliver') && ($row['status']=='processing')){ ?>
    <th>Delivery Person</th>
  <?php }else{ ?>
    <th></th>
  <?php } ?>
  
  </tr>

  <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['order_date']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td><?php echo $row['prefer']; ?></td>
        <?php if(($row['prefer']=='deliver') && ($row['status']=='processing')){ ?>
        <td><a href="assign.php?id=<?php echo $row['id'];?>"><button class="assignbtn">Assign</button></a></td>
        <?php }else{ ?>
        <td><a href="done.php?id=<?php echo $row['id'];?>"><button class="assignbtn">Done</button></a></td>
        <?php } ?>
  </tr>

  </table>
  <br><hr>

  <div class="order-item">
    <?php
    while($row2 = mysqli_fetch_assoc($result2))
    {
      $item_id = $row2['item_id'];
      $sql = "SELECT * from item WHERE med_Id='$item_id'";
      $output = mysqli_query($conn, $sql);
      $line = mysqli_fetch_assoc($output);
    ?>
            <table class="colortable">
                
                <tr> 
                    <td colspan = 2>
                  <div class="name">
                    <div><img src="<?php echo $line['image']; ?>" class="medimg"></div> 
                    <div class="main-name"><?php echo $line['name'];?></br>
                    <?php echo 'brand:';?><?php echo $line['brand'];?><br>
                      <?php
                      if($line['category']=='Medicine'){
                        echo $row2['dosage']; echo 'mg';
                      }
                      ?>
                    </div>
                  </div>
                    </td> 
                    <td><?php echo $row2['quantity']; ?> <?php echo $line['per']; ?></td>
                    <td>Rs. <?php echo $row2['price']?> </td>
                </tr>
            </table>
      <?php
    }
      ?>
  </div> 
  <hr>
  <div class="total">
   <div class="mini-title">
   <table class="table2">
    <tr>
        <td>TOTAL : </td>
        <td>Rs. <?php echo $row['price']; ?></td>
    </tr>
   </table>  
   <br><br><br>     
   </div>
  </div> 

        </div>
    </section>

  </body>
</html>

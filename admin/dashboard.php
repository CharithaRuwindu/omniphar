<?php
require_once('dbconn.php');
require_once('header-1.php');
require_once('navbar.php');

?>

<html>

<head>
  <title>Dashboard</title>
  <link rel="stylesheet" href="css/dashboard.css" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

</head>

<body>
  <section class="home">

    <main class="main-container">
      <div class="main-title">
        <p class="font-weight-bold">DASHBOARD</p>
      </div>

      <div class="main-cards">

        <a href="#meds">
          <div class="card">
            <div class="card-inner">
              <p>PRODUCTS</p>
              <span class="material-icons-outlined text-blue">inventory_2</span>
            </div>
            <span class="text-primary font-weight-bold">
              <?php
                $query = "SELECT COUNT(*) as items FROM item";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);
                $items = $row['items'];
                echo $items;
            ?>
            </span>
          </div>
        </a>
        <a href="all_orders.php">
        <div class="card">
          <div class="card-inner">
            <p>TOTAL ORDERS</p>
            <span class="material-icons-outlined text-orange">add_shopping_cart</span>
          </div>
          <span class="text-primary font-weight-bold">
            <?php
                  $query = "SELECT COUNT(*) as total_orders FROM orders";
                  $result = mysqli_query($conn, $query);
                  $row = mysqli_fetch_assoc($result);
                  $total_orders = $row['total_orders'];
                  echo $total_orders;
              ?>
          </span>
        </div>
</a>
<a href="processing_orders.php">
        <div class="card">
          <div class="card-inner">
            <p>PROCESSING ORDERS</p>
            <span class="material-icons-outlined text-green">shopping_cart</span>
          </div>
          <span class="text-primary font-weight-bold">
            <?php
                $query = "SELECT COUNT(*) as ongoing_orders FROM orders where status = 'processing' ";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);
                $ongoing_orders = $row['ongoing_orders'];
                echo $ongoing_orders;
            ?>
          </span>
        </div>
</a>
        <div class="card">
          <a href="inventory_alerts.php">
            <div class="card-inner">
              <p>INVENTORY ALERTS</p>
              <span class="material-icons-outlined text-red">notification_important</span>
            </div>
          </a>
        </div>

      </div>

      <div class="charts">

        <div class="charts-card">
          <p class="chart-title">Top 5 Products</p>
          <div id="bar-chart"></div>
        </div>

        <div class="charts-card">
          <p class="chart-title">Purchase and Sales Orders</p>
          <div id="area-chart"></div>
        </div>

      </div>
      <button class="addcstmrbtn"><a href="summery_report.php">Generate summary report</a></button>
      <hr><br>

    </main>

    <div class="div1">
      <h3>Pharmacy Information</h3>
      <?php
                  $query1="select * from pharmacy_info";
                  $result1= mysqli_query($conn,$query1); 
                  $row = mysqli_fetch_assoc($result1)
                    ?>
      Pharmacy name:-<?php echo $row['pname']; ?><br>
      Contact Number:-<?php echo $row['contact']; ?><br>
      Email:-<?php echo $row['email']; ?><br>
      Adress:-<?php echo $row['address']; ?><br>
      <div>
        <a href = "update_phar_det.php"><button class="addcstmrbtn" >Edit details</button></a>
        <hr><br>
      </div>
    </div>

    </div>

    <br>

    <!-- .................................................... -->

    <div class="bar" id="meds">
      &nbsp&nbsp&nbsp<u>Pharmaceuticals available</u>
    </div>
    <br>
    <div class="bar1">
      &nbsp&nbsp Medicine
    </div>

    <div><br></div>
  



    <div class="grid-container2">
      <div class="grid-item2">
        <div class = "grid-container-topic">
          <center>
            <h1>Heart</h1>
          </center>
        </div><br>
        <div style="padding: 10px; padding-top: 5px;">

          <ul class="a">
            <?php
                  $query1="select * from item where sub_category='heart' AND category='medicine'";
                  $result1= mysqli_query($conn,$query1); 
                                   
                        while($row1 = mysqli_fetch_assoc($result1))
                        {  
                          $mid=$row1['med_Id'];
                    ?>
            <li><a href="medicine_info.php?mid=<?php echo $row1['med_Id'];?>"><?php echo $row1['name']; ?></a></li>
            <?php
                    }
                ?>
          </ul>
        </div>
      </div>
      <div class="grid-item2">
        <div class = "grid-container-topic">
          <center>
            <h1>Brain</h1>
          </center>
        </div><br>
        <div style="padding: 10px; padding-top: 5px;">
          <ul class="a">
            <?php
                  $query1="select * from item where sub_category='brain' AND category='medicine'";
                  $result1= mysqli_query($conn,$query1); 
                                   
                        while($row1 = mysqli_fetch_assoc($result1))
                        {  
                          $mid=$row1['med_Id'];
                    ?>
            <li><a href="medicine_info.php?mid=<?php echo $row1['med_Id'];?>"><?php echo $row1['name']; ?></a></li>
            <?php
                    }
                ?>

          </ul>
        </div>
      </div>
      <div class="grid-item2">
        <div class = "grid-container-topic">
          <center>
            <h1>Infection</h1>
          </center>
        </div><br>
        <div style="padding: 10px; padding-top: 5px;">
          <ul class="a">
            <?php
                  $query1="select * from item where sub_category='infection' AND category='medicine'";
                  $result1= mysqli_query($conn,$query1); 
                                   
                        while($row1 = mysqli_fetch_assoc($result1))
                        {  
                          $mid=$row1['med_Id'];
                    ?>
            <li><a href="medicine_info.php?mid=<?php echo $row1['med_Id'];?>"><?php echo $row1['name']; ?></a></li>
            <?php
                    }
                ?>

          </ul>
        </div>
      </div>
      <div class="grid-item2">
        <div class = "grid-container-topic">
          <center>
            <h1>Central nervous system</h1>
          </center>
        </div><br>
        <div style="padding: 10px; padding-top: 5px;">
          <ul class="a">
            <?php
                  $query1="select * from item where sub_category='central nervous system' AND category='medicine'";
                  $result1= mysqli_query($conn,$query1); 
                                   
                        while($row1 = mysqli_fetch_assoc($result1))
                        {  
                          $mid=$row1['med_Id'];
                    ?>
            <li><a href="medicine_info.php?mid=<?php echo $row1['med_Id'];?>"><?php echo $row1['name']; ?></a></li>
            <?php
                    }
                ?>

          </ul>
        </div>
      </div>
      <div class="grid-item2">
        <div class = "grid-container-topic">
          <center>
            <h1>Eye </h1>
          </center>
        </div><br>
        <div style="padding: 10px; padding-top: 5px;">
          <ul class="a">
            <?php
                  $query1="select * from item where sub_category='eye' AND category='medicine'";
                  $result1= mysqli_query($conn,$query1); 
                                   
                        while($row1 = mysqli_fetch_assoc($result1))
                        {  
                          $mid=$row1['med_Id'];
                    ?>
            <li><a href="medicine_info.php?mid=<?php echo $row1['med_Id'];?>"><?php echo $row1['name']; ?></a></li>
            <?php
                    }
                ?>

          </ul>
        </div>
      </div>
      <div class="grid-item2">
        <div class = "grid-container-topic">
          <center>
            <h1>Diabetes</h1>
          </center>
        </div><br>
        <div style="padding: 10px; padding-top: 5px;">
          <ul class="a">
            <?php
                  $query1="select * from item where sub_category='diabetes' AND category='medicine'";
                  $result1= mysqli_query($conn,$query1); 
                                   
                        while($row1 = mysqli_fetch_assoc($result1))
                        {  
                          $mid=$row1['med_Id'];
                    ?>
            <li><a href="medicine_info.php?mid=<?php echo $row1['med_Id'];?>"><?php echo $row1['name']; ?></a></li>
            <?php
                    }
                ?>

          </ul>
        </div>
      </div>
      <div class="grid-item2">
        <div class = "grid-container-topic">
          <center>
            <h1>Nose, Year, throat</h1>
          </center>
        </div><br>
        <div style="padding: 10px; padding-top: 5px;">
          <ul class="a">
            <?php
                  $query1="select * from item where sub_category='Nose, Year, throat' AND category='medicine'";
                  $result1= mysqli_query($conn,$query1); 
                                   
                        while($row1 = mysqli_fetch_assoc($result1))
                        {  
                          $mid=$row1['med_Id'];
                    ?>
            <li><a href="medicine_info.php?mid=<?php echo $row1['med_Id'];?>"><?php echo $row1['name']; ?></a></li>
            <?php
                    }
                ?>
          </ul>
        </div>
      </div>
      <div class="grid-item2">
        <div class = "grid-container-topic">
          <center>
            <h1> Muscle and join</h1>
          </center>
        </div><br>
        <div style="padding: 10px; padding-top: 5px;">
          <ul class="a">
            <?php
                  $query1="select * from item where sub_category='Muscle and join' AND category='medicine'";
                  $result1= mysqli_query($conn,$query1); 
                                   
                        while($row1 = mysqli_fetch_assoc($result1))
                        {  
                          $mid=$row1['med_Id'];
                    ?>
            <li><a href="medicine_info.php?mid=<?php echo $row1['med_Id'];?>"><?php echo $row1['name']; ?></a></li>
            <?php
                    }
                ?>

          </ul>
        </div>
      </div>
      <div class="grid-item2">
        <div class = "grid-container-topic">
          <center>
            <h1>others</h1>
          </center>
        </div><br>
        <div style="padding: 10px; padding-top: 5px;">
          <ul class="a">
            <?php
                  $query1="select * from item where sub_category='others' AND category='medicine'";
                  $result1= mysqli_query($conn,$query1); 
                                   
                        while($row1 = mysqli_fetch_assoc($result1))
                        {  
                          $mid=$row1['med_Id'];
                    ?>
            <li><a href="medicine_info.php?mid=<?php echo $row1['med_Id'];?>"><?php echo $row1['name']; ?></a></li>
            <?php
                    }
                ?>

          </ul>
        </div>
      </div>

    </div>



    <div><br></div>


    <div class="bar1">
      &nbsp&nbsp Medical devices
    </div>

    <div><br></div>

    <div class="grid-container2">
      <div class="grid-item2">
        <div class = "grid-container-topic">
          <center>
            <h1>Health devices</h1>
          </center>
        </div><br>
        <div style="padding: 10px; padding-top: 5px;">

          <ul class="a">
            <?php
                  $query1="select * from item where sub_category='health_devices' AND category='medical devices'";
                  $result1= mysqli_query($conn,$query1); 
                                   
                        while($row1 = mysqli_fetch_assoc($result1))
                        {  
                          $mid=$row1['med_Id'];
                    ?>
            <li><a href="medicine_info.php?mid=<?php echo $row1['med_Id'];?>"><?php echo $row1['name']; ?></a></li>
            <?php
                    }
                ?>
          </ul>
        </div>
      </div>
      <div class="grid-item2">
        <div class = "grid-container-topic">
          <center>
            <h1>First aid</h1>
          </center>
        </div><br>
        <div style="padding: 10px; padding-top: 5px;">
          <ul class="a">
            <?php
                  $query1="select * from item where sub_category='first aid' AND category='medical devices'";
                  $result1= mysqli_query($conn,$query1); 
                                   
                        while($row1 = mysqli_fetch_assoc($result1))
                        {  
                          $mid=$row1['med_Id'];
                    ?>
            <li><a href="medicine_info.php?mid=<?php echo $row1['med_Id'];?>"><?php echo $row1['name']; ?></a></li>
            <?php
                    }
                ?>

          </ul>
        </div>
      </div>
      <div class="grid-item2">
        <div class = "grid-container-topic">
          <center>
            <h1>Sports and braces</h1>
          </center>
        </div><br>
        <div style="padding: 10px; padding-top: 5px;">
          <ul class="a">
            <?php
                  $query1="select * from item where sub_category='Sports and braces' AND category='medical devices'";
                  $result1= mysqli_query($conn,$query1); 
                                   
                        while($row1 = mysqli_fetch_assoc($result1))
                        {  
                          $mid=$row1['med_Id'];
                    ?>
            <li><a href="medicine_info.php?mid=<?php echo $row1['med_Id'];?>"><?php echo $row1['name']; ?></a></li>
            <?php
                    }
                ?>

          </ul>
        </div>
      </div>

    </div>


    <div><br></div>

    <div class="bar1">
      &nbsp&nbsp Personal care
    </div>

    <div><br></div>

    <div class="grid-container2">
      <div class="grid-item2">
        <div class = "grid-container-topic">
          <center>
            <h1>Skin care</h1>
          </center>
        </div><br>
        <div style="padding: 10px; padding-top: 5px;">

          <ul class="a">
            <?php
                  $query1="select * from item where sub_category='skin care' AND category='personal care'";
                  $result1= mysqli_query($conn,$query1); 
                                   
                        while($row1 = mysqli_fetch_assoc($result1))
                        {  
                          $mid=$row1['med_Id'];
                    ?>
            <li><a href="medicine_info.php?mid=<?php echo $row1['med_Id'];?>"><?php echo $row1['name']; ?></a></li>
            <?php
                    }
                ?>
          </ul>
        </div>
      </div>
      <div class="grid-item2">
        <div class = "grid-container-topic">
          <center>
            <h1>Body care</h1>
          </center>
        </div><br>
        <div style="padding: 10px; padding-top: 5px;">
          <ul class="a">
            <?php
                  $query1="select * from item where sub_category='Body care' AND category='personal care'";
                  $result1= mysqli_query($conn,$query1); 
                                   
                        while($row1 = mysqli_fetch_assoc($result1))
                        {  
                          $mid=$row1['med_Id'];
                    ?>
            <li><a href="medicine_info.php?mid=<?php echo $row1['med_Id'];?>"><?php echo $row1['name']; ?></a></li>
            <?php
                    }
                ?>

          </ul>
        </div>
      </div>
      <div class="grid-item2">
        <div class = "grid-container-topic">
          <center>
            <h1>Nurishment</h1>
          </center>
        </div><br>
        <div style="padding: 10px; padding-top: 5px;">
          <ul class="a">
            <?php
                  $query1="select * from item where sub_category='nurishment' AND category='personal care'";
                  $result1= mysqli_query($conn,$query1); 
                                   
                        while($row1 = mysqli_fetch_assoc($result1))
                        {  
                          $mid=$row1['med_Id'];
                    ?>
            <li><a href="medicine_info.php?mid=<?php echo $row1['med_Id'];?>"><?php echo $row1['name']; ?></a></li>
            <?php
                    }
                ?>

          </ul>
        </div>
      </div>
      <div class="grid-item2">
        <div class = "grid-container-topic">
          <center>
            <h1>Oral care</h1>
          </center>
        </div><br>
        <div style="padding: 10px; padding-top: 5px;">
          <ul class="a">
            <?php
                  $query1="select * from item where sub_category='oral care' AND category='personal care'";
                  $result1= mysqli_query($conn,$query1); 
                                   
                        while($row1 = mysqli_fetch_assoc($result1))
                        {  
                          $mid=$row1['med_Id'];
                    ?>
            <li><a href="medicine_info.php?mid=<?php echo $row1['med_Id'];?>"><?php echo $row1['name']; ?></a></li>
            <?php
                    }
                ?>

          </ul>
        </div>
      </div>
      <div class="grid-item2">
        <div class = "grid-container-topic">
          <center>
            <h1>Hands and foot care</h1>
          </center>
        </div><br>
        <div style="padding: 10px; padding-top: 5px;">
          <ul class="a">
            <?php
                  $query1="select * from item where sub_category='hands and foot care' AND category='personal care'";
                  $result1= mysqli_query($conn,$query1); 
                                   
                        while($row1 = mysqli_fetch_assoc($result1))
                        {  
                          $mid=$row1['med_Id'];
                    ?>
            <li><a href="medicine_info.php?mid=<?php echo $row1['med_Id'];?>"><?php echo $row1['name']; ?></a></li>
            <?php
                    }
                ?>

          </ul>
        </div>
      </div>
      <div class="grid-item2">
        <div class = "grid-container-topic">
          <center>
            <h1>Eye </h1>
          </center>
        </div><br>
        <div style="padding: 10px; padding-top: 5px;">
          <ul class="a">
            <?php
                  $query1="select * from item where sub_category='eye' AND category='personal care'";
                  $result1= mysqli_query($conn,$query1); 
                                   
                        while($row1 = mysqli_fetch_assoc($result1))
                        {  
                          $mid=$row1['med_Id'];
                    ?>
            <li><a href="medicine_info.php?mid=<?php echo $row1['med_Id'];?>"><?php echo $row1['name']; ?></a></li>
            <?php
                    }
                ?>

          </ul>
        </div>
      </div>
      <div class="grid-item2">
        <div class = "grid-container-topic">
          <center>
            <h1>diabetes</h1>
          </center>
        </div><br>
        <div style="padding: 10px; padding-top: 5px;">
          <ul class="a">
            <?php
                  $query1="select * from item where sub_category='heart' AND category='personal care'";
                  $result1= mysqli_query($conn,$query1); 
                                   
                        while($row1 = mysqli_fetch_assoc($result1))
                        {  
                          $mid=$row1['med_Id'];
                    ?>
            <li><a href="medicine_info.php?mid=<?php echo $row1['med_Id'];?>"><?php echo $row1['name']; ?></a></li>
            <?php
                    }
                ?>

          </ul>
        </div>
      </div>
      <div class="grid-item2">
        <div class = "grid-container-topic">
          <center>
            <h1>Nose, Year, throat</h1>
          </center>
        </div><br>
        <div style="padding: 10px; padding-top: 5px;">
          <ul class="a">
            <?php
                  $query1="select * from item where sub_category='heart' AND category='personal care'";
                  $result1= mysqli_query($conn,$query1); 
                                   
                        while($row1 = mysqli_fetch_assoc($result1))
                        {  
                          $mid=$row1['med_Id'];
                    ?>
            <li><a href="medicine_info.php?mid=<?php echo $row1['med_Id'];?>"><?php echo $row1['name']; ?></a></li>
            <?php
                    }
                ?>
          </ul>
        </div>
      </div>
      <div class="grid-item2">
        <div class = "grid-container-topic">
          <center>
            <h1> Muscle and join</h1>
          </center>
        </div><br>
        <div style="padding: 10px; padding-top: 5px;">
          <ul class="a">
            <?php
                  $query1="select * from item where sub_category='heart' AND category='personal care'";
                  $result1= mysqli_query($conn,$query1); 
                                   
                        while($row1 = mysqli_fetch_assoc($result1))
                        {  
                          $mid=$row1['med_Id'];
                    ?>
            <li><a href="medicine_info.php?mid=<?php echo $row1['med_Id'];?>"><?php echo $row1['name']; ?></a></li>
            <?php
                    }
                ?>

          </ul>
        </div>
      </div>
      <div class="grid-item2">
        <div class = "grid-container-topic">
          <center>
            <h1>others</h1>
          </center>
        </div><br>
        <div style="padding: 10px; padding-top: 5px;">
          <ul class="a">
            <?php
                  $query1="select * from item where sub_category='heart' AND category='personal care'";
                  $result1= mysqli_query($conn,$query1); 
                                   
                        while($row1 = mysqli_fetch_assoc($result1))
                        {  
                          $mid=$row1['med_Id'];
                    ?>
            <li><a href="medicine_info.php?mid=<?php echo $row1['med_Id'];?>"><?php echo $row1['name']; ?></a></li>
            <?php
                    }
                ?>

          </ul>
        </div>
      </div>

    </div>


    <div><br></div>

    <div class="bar1">
      &nbsp&nbsp Wellness
    </div>

    <div><br></div>
    <div class="grid-container2">
      <div class="grid-item2">
        <div class = "grid-container-topic">
          <center>
            <h1>Diet and Nutritions</h1>
          </center>
        </div><br>
        <div style="padding: 10px; padding-top: 5px;">

          <ul class="a">
            <?php
                  $query1="select * from item where sub_category='diet and nutritions' AND category='wellness'";
                  $result1= mysqli_query($conn,$query1); 
                                   
                        while($row1 = mysqli_fetch_assoc($result1))
                        {  
                          $mid=$row1['med_Id'];
                    ?>
            <li><a href="medicine_info.php?mid=<?php echo $row1['med_Id'];?>"><?php echo $row1['name']; ?></a></li>
            <?php
                    }
                ?>
          </ul>
        </div>
      </div>
      <div class="grid-item2">
        <div class = "grid-container-topic">
          <center>
            <h1>Mother and baby items</h1>
          </center>
        </div><br>
        <div style="padding: 10px; padding-top: 5px;">
          <ul class="a">
            <?php
                  $query1="select * from item where sub_category='Mother and Baby item' AND category='wellness'";
                  $result1= mysqli_query($conn,$query1); 
                                   
                        while($row1 = mysqli_fetch_assoc($result1))
                        {  
                          $mid=$row1['med_Id'];
                    ?>
            <li><a href="medicine_info.php?mid=<?php echo $row1['med_Id'];?>"><?php echo $row1['name']; ?></a></li>
            <?php
                    }
                ?>

          </ul>
        </div>
      </div>
      <div class="grid-item2">
        <div class = "grid-container-topic">
          <center>
            <h1>Alergy</h1>
          </center>
        </div><br>
        <div style="padding: 10px; padding-top: 5px;">
          <ul class="a">
            <?php
                  $query1="select * from item where sub_category='alergy' AND category='wellness'";
                  $result1= mysqli_query($conn,$query1); 
                                   
                        while($row1 = mysqli_fetch_assoc($result1))
                        {  
                          $mid=$row1['med_Id'];
                    ?>
            <li><a href="medicine_info.php?mid=<?php echo $row1['med_Id'];?>"><?php echo $row1['name']; ?></a></li>
            <?php
                    }
                ?>

          </ul>
        </div>
      </div>
      <div class="grid-item2">
        <div class = "grid-container-topic">
          <center>
            <h1>Pain and fever</h1>
          </center>
        </div><br>
        <div style="padding: 10px; padding-top: 5px;">
          <ul class="a">
            <?php
                  $query1="select * from item where sub_category='pain and fever' AND category='wellness'";
                  $result1= mysqli_query($conn,$query1); 
                                   
                        while($row1 = mysqli_fetch_assoc($result1))
                        {  
                          $mid=$row1['med_Id'];
                    ?>
            <li><a href="medicine_info.php?mid=<?php echo $row1['med_Id'];?>"><?php echo $row1['name']; ?></a></li>
            <?php
                    }
                ?>

          </ul>
        </div>
      </div>
      <div class="grid-item2">
        <div class = "grid-container-topic">
          <center>
            <h1>Preventive care</h1>
          </center>
        </div><br>
        <div style="padding: 10px; padding-top: 5px;">
          <ul class="a">
            <?php
                  $query1="select * from item where sub_category='preventive care' AND category='wellness'";
                  $result1= mysqli_query($conn,$query1); 
                                   
                        while($row1 = mysqli_fetch_assoc($result1))
                        {  
                          $mid=$row1['med_Id'];
                    ?>
            <li><a href="medicine_info.php?mid=<?php echo $row1['med_Id'];?>"><?php echo $row1['name']; ?></a></li>
            <?php
                    }
                ?>

          </ul>
        </div>
      </div>
    </div>


    <div><br></div>

    <div class="bar1">
      &nbsp&nbsp Other
    </div>

    <div><br></div>

    <div class="grid-container2">
      <div class="grid-item2">
        <div class = "grid-container-topic">
          <center>
            <h1>Heart</h1>
          </center>
        </div><br>
        <div style="padding: 10px; padding-top: 5px;">

          <ul class="a">
            <?php
                  $query1="select * from item where category='other'";
                  $result1= mysqli_query($conn,$query1); 
                                   
                        while($row1 = mysqli_fetch_assoc($result1))
                        {  
                          $mid=$row1['med_Id'];
                    ?>
            <li><a href="medicine_info.php?mid=<?php echo $row1['med_Id'];?>"><?php echo $row1['name']; ?></a></li>
            <?php
                    }
                ?>
          </ul>
        </div>
      </div>

    </div>


    



    </div>
    </div>


    <br>
    <br>
    <br>
    <br>







  </section>



</body>

</html>
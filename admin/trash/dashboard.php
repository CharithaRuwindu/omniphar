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

          <a href="#meds"><div class="card">
            <div class="card-inner">
              <p>PRODUCTS</p>
              <span class="material-icons-outlined text-blue">inventory_2</span>
            </div>
            <span class="text-primary font-weight-bold">249</span>
          </div></a>

          <div class="card">
            <div class="card-inner">
              <p >PURCHASE ORDERS</p>
              <span class="material-icons-outlined text-orange">add_shopping_cart</span>
            </div>
            <span class="text-primary font-weight-bold">83</span>
          </div>

          <div class="card">
            <div class="card-inner">
              <p >SALES ORDERS</p>
              <span class="material-icons-outlined text-green">shopping_cart</span>
            </div>
            <span class="text-primary font-weight-bold">79</span>
          </div>

          <div class="card">
            <div class="card-inner">
              <p >INVENTORY ALERTS</p>
              <span class="material-icons-outlined text-red">notification_important</span>
            </div>
            <span class="text-primary font-weight-bold">56</span>
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
              <button class="addcstmrbtn" onclick="openPopup()">Eddit details</button><br>
              <button class="addcstmrbtn" onclick="window.location.href = 'add_new_medicine.php';">Add new medicine</button>
            </div>
          </div>

      </div>

<br>

<!-- .................................................... -->

      <div class="bar" id="meds">
      &nbsp&nbsp&nbsp<u style="letter-spacing: 5px;">Pharmaceuticals available</u>
        <div class="search-container" style="margin-bottom:1%">
          <form action="" class="search-form">
              <input type="text" placeholder="Search for items" class="search-box">
              <button type="submit" class="lens"><i class="fa fa-search"></i></button>
          </form>
        </div>
          <div class="bar1">
          &nbsp&nbsp Medicine
          </div>

          <div class="content">
           
          </div>



            <div class="grid-container2">
              <div class="grid-item2">
                <div style="background-color: blue;width: auto;">
                  <center><h1>Heart</h1></center>
                </div><br>
                <div style="padding: 10px; padding-top: 5px;">
                
                  <ul class="a">
                  <?php
                  $query1="select * from medicine where category='Medicine'";
                  $result= mysqli_query($conn,$query1); 
                                   
                        while($row = mysqli_fetch_assoc($result))
                        {  
                          $mid=$row['med_Id'];
                    ?>
                    <li><a href="medicine_info.php?mid=<?php echo $row['med_Id'];?>"><?php echo $row['name']; ?></a></li>
                    <?php
                    }
                ?>
                </ul>
                </div>
              </div>
              <div class="grid-item2">
                <div style="background-color: blue;width: 175px;">
                  <center><h1>Heart</h1></center>
                </div><br>
                <div style="padding: 10px; padding-top: 5px;">
                  <ul class="a">
                  <li>Beta-blokes</li>
                  <li>Anti-platelet</li>
                  <li>Anticoagulan</li>
                  <li>Anti-arrhythmic</li>
                  <li>ACE inhibitors</li>
                  <li>Calcium channel blockers</li>
                </ul>
                </div>
              </div>
              <div class="grid-item2">
                <div style="background-color: blue;width: 175px;">
                  <center><h1>Heart</h1></center>
                </div><br>
                <div style="padding: 10px; padding-top: 5px;">
                  <ul class="a">
                  <li>Beta-blokes</li>
                  <li>Anti-platelet</li>
                  <li>Anticoagulan</li>
                  <li>Anti-arrhythmic</li>
                  <li>ACE inhibitors</li>
                  <li>Calcium channel blockers</li>
                </ul>
                </div>
              </div>  
              <div class="grid-item2">
                <div style="background-color: blue;width: 175px;">
                  <center><h1>Heart</h1></center>
                </div><br>
                <div style="padding: 10px; padding-top: 5px;">
                  <ul class="a">
                  <li>Beta-blokes</li>
                  <li>Anti-platelet</li>
                  <li>Anticoagulan</li>
                  <li>Anti-arrhythmic</li>
                  <li>ACE inhibitors</li>
                  <li>Calcium channel blockers</li>
                </ul>
                </div>
              </div>
              <div class="grid-item2">
                <div style="background-color: blue;width: 175px;">
                  <center><h1>Heart</h1></center>
                </div><br>
                <div style="padding: 10px; padding-top: 5px;">
                  <ul class="a">
                  <li>Beta-blokes</li>
                  <li>Anti-platelet</li>
                  <li>Anticoagulan</li>
                  <li>Anti-arrhythmic</li>
                  <li>ACE inhibitors</li>
                  <li>Calcium channel blockers</li>
                </ul>
                </div>
              </div>
              <div class="grid-item2"><div style="background-color: blue;width: 175px;">
                <center><h1>Heart</h1></center>
              </div><br>
              <div style="padding: 10px; padding-top: 5px;">
                <ul class="a">
                <li>Beta-blokes</li>
                <li>Anti-platelet</li>
                <li>Anticoagulan</li>
                <li>Anti-arrhythmic</li>
                <li>ACE inhibitors</li>
                <li>Calcium channel blockers</li>
              </ul>
              </div>
              </div>  
              <div class="grid-item2">
                <div style="background-color: blue;width: 175px;">
                  <center><h1>Heart</h1></center>
                </div><br>
                <div style="padding: 10px; padding-top: 5px;">
                  <ul class="a">
                  <li>Beta-blokes</li>
                  <li>Anti-platelet</li>
                  <li>Anticoagulan</li>
                  <li>Anti-arrhythmic</li>
                  <li>ACE inhibitors</li>
                  <li>Calcium channel blockers</li>
                </ul>
                </div>
              </div>
              <div class="grid-item2">
                <div style="background-color: blue;width: 175px;">
                  <center><h1>Heart</h1></center>
                </div><br>
                <div style="padding: 10px; padding-top: 5px;">
                  <ul class="a">
                  <li>Beta-blokes</li>
                  <li>Anti-platelet</li>
                  <li>Anticoagulan</li>
                  <li>Anti-arrhythmic</li>
                  <li>ACE inhibitors</li>
                  <li>Calcium channel blockers</li>
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



            <!-- edit pharmacy details -->
          
            <div class="popup" id="popup">
      <div class="div2">
        
            <form class="form1" action="phar_det_edit.php">
              
              <div class="info">
              <label>pharmacy Name:</label>
                <input class="input1" type="text" name="pname" ><br>
                <label>contact number:</label>
                <input class="input1" type="text" name="contact" ><br>
                <label>Email:</label>
                <input class="input1" type="email" name="email" ><br>
                <label>Address:</label>
                <input class="input1" type="text" name="address" ><br>
        
                
              <button type="submit" href="#">Update</button><br><br>
              <button class="form_button" type="button" onclick="closePopup()">Close</button>

              </div>
            </form>
          </div>
      </div>

      

    </section>

    <script>
            let popup = document.getElementById("popup");

            function openPopup() {
                popup.classList.add("open_popup")
            }
            function closePopup() {
                popup.classList.remove("open_popup")
            }
    </script>



    
    </body>
</html>
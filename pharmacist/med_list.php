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
    <link rel="stylesheet" href="css/med_list.css" />
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
          <p class="font-weight-bold">PHARMACEUTICALS</p>
        </div>
<hr>
        <div class="main-title"> 
          <span class="mini-title">Add Item</p>
        </div>

        <div class="main-cards">

          <div class="card">
            <div class="card-inner">
              <p class="text-primary">MEDICINE</p>
              <a href="add_med.php"><span class="bx bx-add-to-queue text-cyan"></span></a>
            </div>

            <span class="text-primary font-weight-bold">
            <?php 
            $query="SELECT * FROM item WHERE category='Medicine'";
            $result= mysqli_query($conn,$query);
            if($medicine_total = mysqli_num_rows($result)){
                echo "$medicine_total";
            }
             else{
               echo "0";
             }
            ?>
            </span>

          </div>

          <div class="card">
            <div class="card-inner">
              <p class="text-primary">MEDICAL DEVICES</p>
              <a href="add_med_device.php"><span class="bx bx-add-to-queue text-green"></span></a>
              </div>
            <span class="text-primary font-weight-bold">
              <?php 
            $query="SELECT * FROM item WHERE category ='Medical devices'";
            $result= mysqli_query($conn,$query);
            if($devices_total = mysqli_num_rows($result)){
                echo "$devices_total";
            }
             else{
               echo "0";
             }
            ?>
            </span>
          </div>

          <div class="card">
            <div class="card-inner">
              <p class="text-primary">PERSONAL CARE</p>
              <a href="add_personal_care.php"><span class="bx bx-add-to-queue text-purple"></span></a>
            </div>
            <span class="text-primary font-weight-bold">
            <?php 
            $query="SELECT * FROM item WHERE category = 'Personal care'";
            $result= mysqli_query($conn,$query);
            if($care_total = mysqli_num_rows($result)){
                echo "$care_total";
            }
             else{
               echo "0";
             }
            ?>
            </span>
          </div>

          <div class="card">
            <div class="card-inner">
              <p class="text-primary">WELLNESS</p>
              <a href="add_wellness.php"><span class="bx bx-add-to-queue text-blue"></span></a>
            </div>
            <span class="text-primary font-weight-bold">
            <?php 
            $query="SELECT * FROM item WHERE category ='wellness'";
            $result= mysqli_query($conn,$query);
            if($wellness_total = mysqli_num_rows($result)){
                echo "$wellness_total";
            }
             else{
               echo "0";
             }
            ?>
            </span>
          </div>

          <div class="card">
            <div class="card-inner">
              <p class="text-primary">OTHER</p>
              <a href="add_other.php"><span class="bx bx-add-to-queue text-pink"></span></a>
            </div>
            <span class="text-primary font-weight-bold"><?php 
            $query="SELECT * FROM item WHERE category ='other'";
            $result= mysqli_query($conn,$query);
            if($other_total = mysqli_num_rows($result)){
                echo "$other_total";
            }
             else{
               echo "0";
             }
            ?></span>
          </div>   
                        
        </div>
 
<div class="main-title"> 
          <span class="mini-title">Browse by Category</p>
        </div>
        
  <table class="table1">
  <tr>
  <th><a href="all_med.php"><div class="btn btn-one"><span>MEDICINE</span></div></div></a></th>
  <th><a href="all_devices.php"><div class="btn btn-one"><span>MEDICAL DEVICES</span></div></a></th>
  <th><a href="all_care.php"><div class="btn btn-one"><span>PERSONAL CARE</span></div></a></th>
  <th><a href="all_wellness.php"><div class="btn btn-one"><span>WELLNESS</span></div></a></th>
  <th><a href="heart.php"><div class="btn btn-one"><span>OTHER</span></div></th>
  </tr>
  <tr>
    <td><a href="heart.php">Heart</a></td>
    <td><a href="health_devices.php">Health Devices</a></td>
    <td><a href="skin_care.php">Skin care</a></td>
    <td><a href="diet.php">Diet and Nutritions</a></td>
    <td></td>
    </tr>

     <tr>
    <td><a href="central_Nsystem.php">Central Nervous System</a></td>
    <td><a href="first_aid.php">First aid</a></td>
    <td><a href="body_care.php">Body care</a></td>
    <td><a href="motherbaby.php">Mother and Baby item</a></td>
    <td></td>
    </tr>

     <tr>
    <td><a href="eye.php">Eye</a></td>
    <td><a href="sports.php">Sports and Braces</a></td>
    <td><a href="nourishment.php">Nourishment</a></td>
    <td><a href="allergy.php">Allergy</a></td>
    <td></td>
    </tr>

    <tr>
    <td><a href="diabetes.php">Diabetes</a></td>
    <td></td>
    <td><a href="oral.php">Oral care</a></td>
    <td><a href="pain.php">Pain and fever</a></td>
    <td></td>
    </tr>

     <tr>
    <td><a href="nose.php">Nose,Ear,Throat</a></td>
    <td></td>
    <td><a href="hands&foot.php">Hands and Foot care</a></td>
    <td><a href="preventive.php">Preventive care</a></td>
    <td></td>
    </tr>

     <tr>
    <td><a href="infection.php">Infection</a></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    </tr>

    <tr>
    <td><a href="muscle.php">Muscle and Joint</a></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    </tr>

     <tr>
    <td><a href="med_other.php">Others</a></td><br>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    </tr>
</table><br><br><br>

</div>
    </section>

  </body>
</html>

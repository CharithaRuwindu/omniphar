<?php
    require_once('dbconn.php');
    require_once('header.php');
    require_once('navbar.php');

    $med_Id = $_GET['med_Id'];

    $query = "SELECT * from item where med_Id='$med_Id'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);

    $query2 = "SELECT * from dosage where med_id='$med_Id'";
    $result2 = mysqli_query($conn,$query2);


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Side Navbar - Tivotal</title>
    <link rel="stylesheet" href="css/med_profile.css" />
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
          <p class="font-weight-bold">Medicine Details</p>
        </div>

        <div class="left-side">
        <div class="image-container">
        <img src="<?php echo $row['image']; ?>">
        </div>    
        </div>

        <div class="right-side">
        <div class="medicine-details">
        <table>
            <tr>
                <td class="main-name" colspan="2"><label><?php echo $row['name']; ?></label></td>
            </tr>
            <tr><td colspan="2"></td></tr>
            <tr>
                <td><label>Brand : </label></td>
                <td class="second"><?php echo $row['brand']; ?></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td><label>Price : </label></td>
                <td class="second"><?php echo $row['price']; ?></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td><label>Per : </label></td>
                <td class="second"><?php echo $row['per']; ?></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            
            
            <tr>
                <td><label>Dosage : </label></td>
                <td class="second">
                <?php while($row2 = mysqli_fetch_assoc($result2)){ ?>
                <?php echo $row2['dose']; ?>mg | 
                <?php
                }
                ?>
                </td>
            </tr>
            
            
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td><label>Description: </label></td>
                <td class="second"><?php echo $row['description']; ?></td>
            </tr>
            
        </table>

        </div>
        </div>
    </section>

  </body>
</html>

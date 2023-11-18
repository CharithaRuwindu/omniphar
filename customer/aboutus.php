<?php
    require_once('headerforall.php'); 
    require_once('navbar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/aboutus.css">
    <script src="https://kit.fontawesome.com/2816eb5ad3.js" crossorigin="anonymous"></script>
    <title> about us</title>
    <link rel="icon" href="assets/omniphar.png">
</head>
<body>
    <div class="content">
        <div class="divtitle">
            <h2> About Us</h2>
            <?php 
            $query = "SELECT * from pharmacy_info where id = 1";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            ?>

            <table>
                <tr>
                <td><i class='bx bxs-home' ></i> <?php echo $row['pname']; ?></td>
                </tr>
                <tr>
                <td><i class='bx bxs-envelope' ></i> <?php echo $row['email']; ?></td>
                </tr>
                <tr>
                <td><i class='bx bxs-location-plus' ></i> <?php echo $row['address']; ?></td>
                </tr>
                <tr>
                <td><i class='bx bxs-phone' ></i> <?php echo $row['contact']; ?></td>
                </tr>
            </table>
            
        </div>
        
        <div class="para">
            <img src="assets/pharmacy.png" alt="image">
            <p><b> We are a prestegious pharmacy situated in the heart of colombo providing best pharmaceutical services and ensuring your well being.<br> Extending our service to the valuable customers, this platform provides with online purchasing of your medicines to your households at a reasonable price. Guaranteeing abour the quality of the products we make sure your health won’t be affected any harmful way purchasing and consuming our deliveries </b></p>
        </div>
    </div>
</body>
</html>
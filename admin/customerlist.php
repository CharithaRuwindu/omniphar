<?php
require_once('dbconn.php');
require_once('header-1.php');
require_once('navbar.php');
require_once('add_customer.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/customerlist.css">
    <script src="https://kit.fontawesome.com/2816eb5ad3.js" crossorigin="anonymous"></script>
    <title>OMNIphar</title>
    <link rel="icon" href="assets/omniphar.png">
</head>
<body>
<section class="home">
        <div class="div1">
            <div class="topicleft">
                <h2>Customers</h2>
            </div>
        <div class="topicright">
            <a href="reg_customer.php"><button class="btn_right" type="submit" onclick="openPopup()";> Add a customer </button></a>
        </div>
                <table class="mytbl">
                    <tr>
                      <th>Customer ID</th>
                      <th> First Name</th>
                      <th> Last Name</th>
                      <th>Address</th>
                      <th>Contact</th>
                    </tr>
                    <?php
                    $query="SELECT * from user where role='customer'";
                    $result= mysqli_query($conn,$query);
                    
                        while($row = mysqli_fetch_assoc($result))
                        {
                            $cid=$row['id'];
                    ?>
                    <tr>
                    <td> <?php echo $row['id']; ?></td>
                    <td> <?php echo $row['firstname']; ?></td>
                    <td> <?php echo $row['lastname']; ?></td>
                    <td> <?php echo $row['address']; ?></td>
                    <td> <?php echo $row['contact']; ?></td>
                    <td><button class="ebtn"><a href="customer_profile.php?cid=<?php echo $row['id'];?>" class = "a1">Go to profile</a></button></td>
                    

                </tr>
                    <?php
                    }
                ?>
                </table>
                <br><br>
        <br><br>
    </div>

        

</body>
</html>





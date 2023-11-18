<?php
    require_once('dbconn.php');
    $query="select * from customer";
    $result= mysqli_query($conn,$query);
    require_once('admin_navbar.php');
    require_once('admin_header.php');
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
    <div class="content">
        <div class="middle">
            <div class="topicleft">
                <h2>Customers</h2>
            </div>
        <div class="topicright">
            <button class="btn_right" type="submit"> <b> <a href="addcustomer.php" > Add a customer </a> </b></button>
        </div>
            <form>
                <table class="clist_tbl">
                    <tr>
                    <th>Customer ID</th>
                    <th> First Name</th>
                    <th> Last Name</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th style="width:15%;"></th>
                    </tr>
                    <?php
                        while($row = mysqli_fetch_assoc($result))
                        {
                    ?>
                    <tr>
                    <td> <?php echo $row['id']; ?></td>
                    <td> <?php echo $row['first_name']; ?></td>
                    <td> <?php echo $row['last_name']; ?></td>
                    <td> <?php echo $row['address']; ?></td>
                    <td> <?php echo $row['contact']; ?></td>
                    <td><button class="tbutton" type="submit"> <b>Go to profile </b></button></td>
                    </tr>
                    <?php
                    }
                ?>
                </table>
        </form>
    </div>
</body>
</html>





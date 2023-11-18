<?php
    require_once('headerforall.php'); 
    require_once('navbar.php');
    require_once('dbconn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ominiphar</title>
    <link rel="stylesheet" href="css/myorders.css" />
    <script src="https://kit.fontawesome.com/2816eb5ad3.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>
</head>
<body>
    <div class="content">
        <h2> My Orders </h2>
        <img src="assets/order.png" class="orderimg"> 
        <table class="divtable">
            <?php
                $uid = $_SESSION['uid'];
                $query="SELECT * from orders WHERE customer_id = $uid";
                $result=mysqli_query($conn,$query);
                while($row = mysqli_fetch_assoc($result))
                {
                    $oid = $row['id'];
            ?>
            <tr class="divrow">
                <td> OrderID: <?php echo $row['id']?></td>
                <td> <a href="vieworderdetails.php?oid=<?php echo $oid;?>"><button class="tablebtl">order details</button></a> </br> 
                <?php
                    if($row['status']!='completed'&& $row['status']!='processing'&& $row['status']!='canceled' && $row['status']!='packed' && $row['status']!='delivered'){
                ?>

                <button class="tablebtl"> <a href="ordertrack.php"> Track the order</td>
                
                <?php
                    }
                ?>
                <td> <button class="status2">  <?php echo $row['status']?>  </button></td>
            </tr>
            <?php
                }
            ?>
            <!-- <tr class="divrow">
                <td> OrderID: O 002</td>
                <td> Med name </br> Med name </td>
                <td> <button class="tablebtl"> <a href="vieworderdetails.php"> order details </a> </button> </br> <button class="tablebtl"> <a href="ordertrack.php"> Track the order </a> </button></td>
                <td > <button class="status2"> On going </button> </td>
            </tr> -->
        </table>
    </div>
</body>
</html>
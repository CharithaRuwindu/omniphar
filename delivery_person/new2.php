<?php
require_once('dbconn.php');
require_once('navbar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/delivery_person/new2.css">
</head>
<body>
    <?php
    require_once('header.php');
    session_start();
    $uid = $_SESSION['uid'];
    ?>
    <div class="content">
    <div class="topic"><h2 >Completed Orders</h2></div>
            <div class="dispatch_read">
            <div><Button class="rep_btn" onclick="window.location.href = 'delivered_report.php'">Report</Button></div>
            <table class="topics">
                    <tr>
                        <th>Order ID</th>
                        <th>Address</th>
                        <th>Delivered Date</th>
                    </tr>
                </table>
            </div>
            <?php
            $query="SELECT * from orders WHERE status = 'delivered' AND delivery_person_id = '$uid'";
            $result= mysqli_query($conn,$query);
                while($row = mysqli_fetch_assoc($result))
                {
                    $cid = $row['customer_id'];
                    $query2="select * from user where id = $cid";
                    $result2= mysqli_query($conn,$query2);
                    $row2 = mysqli_fetch_assoc($result2);
                    $oid = $row['id'];
            ?>
            <a href="delivered_info.php?oid=<?php echo $row['id']; ?>">
            <div class="record">
                <table class="details">
                    <tr>
                        <th><?php echo $row['id']; ?></th>
                        <th><?php echo $row['address']; ?></th>
                        <th><?php 
                        echo $row['delivery_date'];
                        // echo $row2['contact']; 
                        ?></th>
                        <span class="switch-container"></span>
                    </tr>
                </table>
            </div>
            </a>
            <?php
                }
            ?>
        </div>
</body>
</html>

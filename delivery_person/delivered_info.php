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
    <link rel="stylesheet" href="../css/delivery_person/delivered_info.css">
</head>
<body>
    <?php
    require_once('header.php');
    ?>
    <div class="content">
        <div class="order_details">
            <table class="detail_tbl">
                <?php 
                    $oid = $_GET['oid'];
                    $query1="select * from order_items where order_id=$oid";
                    $result1= mysqli_query($conn,$query1);

                    $query3="select * from orders where id=$oid";
                    $result3= mysqli_query($conn,$query3);
                    $row3 = mysqli_fetch_assoc($result3);

                    $cid = $row3['customer_id'];

                    $query4="select * from user where id=$cid";
                    $result4= mysqli_query($conn,$query4);
                    $row4 = mysqli_fetch_assoc($result4);
                ?>
                <tr>
                    <td>Order ID :</td>
                    <td><?php echo $row3['id']?></td>
                </tr>
                <tr>
                    <td>Order Date :</td>
                    <td><?php echo $row3['order_date']?></td>
                </tr>
                <tr>
                    <td>Address :</td>
                    <td><?php echo $row3['address']?></td>
                </tr>
                <tr>
                    <td>Customer :</td>
                    <td><?php echo $row4['firstname']?> <?php echo $row4['lastname']?></td>
                </tr>
            </table>
            <table class="delivery_tbl">
                <tr>
                    <td>Delivered Date :</td>
                    <td><?php echo $row3['delivery_date']?></td>
                </tr>
                <tr>
                    <td>Time :</td>
                    <td><?php
                        $time = $row3['delivery_time'];
                        $formated_time = date("h:i A", strtotime($time));
                        echo $formated_time;
                     ?></td>
                </tr>
            </table>

            <table class="item_topic">
                <tr>
                    <th>Item</th>
                    <th>Name</th>
                    <th>Amount</th>
                </tr>
            </table>

            <?php
            
                while($row1 = mysqli_fetch_assoc($result1))
                    {
                        $item_id = $row1['item_id'];
                        $query2="select * from item where med_Id=$item_id";
                        $result2= mysqli_query($conn,$query2);
                        $row2 = mysqli_fetch_assoc($result2);         
            ?>

                    <table class="item_detail">
                    <tr>
                        <td><img src="<?php echo $row2['image']?>" class="item_img"></td>
                        <td><?php echo $row2['name']?></td>
                        <td><?php echo $row1['quantity']?></td>
                    </tr>
                </table>

            <?php
                }
            ?>
        </div>

    </div>
</body>
</html>
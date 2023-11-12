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
    <link rel="stylesheet" href="../css/delivery_person/ongoing_info.css">
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
            <button class="cancel" onclick="openPopup()">Cancel</button>
            <a href="route.php"><button class="route">Route</button></a>

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
        
        <div class="popup" id="popup">
            <form>
                <label>Order ID</label>
                <input class="input1" type="text" name="name"><br>
                <label>contact number:</label>
                <input class="input1" type="text" name="name" placeholder="Enter Last name here."><br>
                <label>Email:</label>
                <input class="input1" type="text" name="name" placeholder="Enter Email here."><br>
                <label>Address:</label>
                <input class="input1" type="text" name="name" placeholder="Enter NIC Number here."><br>
    
                
              <button type="submit" href="#">Confirm</button>
              <button class="form_button" type="button" onclick="closePopup()">Close</button>
            </form>
        </div>



    </div>


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
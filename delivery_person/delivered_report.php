<?php
require_once('dbconn.php');
require_once('navbar.php');
require_once('header.php');
session_start();
$uid = $_SESSION['uid'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../css/delivery_person/delivered_report.css">
</head>
<body>
    <div class="content">
    <div class="topic"><h2 >Report Generation</h2></div>
    <div class="print_btn_container">
        <form action="" method="POST">
        <label for="begin" class="begin">From:</label>
        <input type="date" id="from_date" name="from_date">
        <label for="end" class="end">To:</label>
        <input type="date" id="to_date" name="to_date">
        <Button type="submit" name="search_btn" class="search_btn">search</Button>
        </form>
        <hr>
        <Button class="print_btn" onclick="window.print()"><i class='bx bxs-printer'></i>Download</Button>
    </div>
    <div class="head_container">
        <table class="topics">
                <tr>                 
                    <th>Order ID</th>
                    <th>Customer</th>
                    <th>Address</th>
                    <th> Delivered date</th>
                    <th> Time</th>
                </tr>
        </table>
    </div>
        <div class="record">
                <table class="details">
                <?php
                if(isset($_POST['search_btn'])){
                    $from_date = $_POST['from_date'];
                    $to_date = $_POST['to_date'];


                    $query="SELECT * from orders WHERE status = 'delivered' AND delivery_person_id = '$uid' AND delivery_date BETWEEN '$from_date' AND '$to_date'";
                    $result= mysqli_query($conn,$query);
                
                }else{

                    $query="SELECT * from orders WHERE status = 'delivered' AND delivery_person_id = '$uid'";
                    $result= mysqli_query($conn,$query);
                }
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $cid = $row['customer_id'];
                        $query2="select * from user where id = $cid";
                        $result2= mysqli_query($conn,$query2);
                        $row2 = mysqli_fetch_assoc($result2);
                        $oid = $row['id'];
                ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row2['firstname']; ?>  <?php echo $row2['lastname']?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['delivery_date'];?></td>
                        <td><?php echo $row['delivery_time'];?></td>
                    </tr>

                    <?php
                    }
                    ?>

                </table>
        </div>
    </div>
</body>
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
        <div class="head_container">
            <table class="topics">
                <tr>                 
                    <th>Order ID</th>
                    <th>Customer</th>
                    <th>Address</th>
                    <th>Contact</th>
                </tr>
            </table>
        </div>
        <div class="record">
            <table class="details">
            <?php
            if (isset($_POST['btn'])) {
                $search = $_POST['search'];

                // Sanitize the search input or use prepared statements

                $query = "SELECT * FROM orders WHERE delivery_person_id = '$uid' AND id LIKE '%$search%'";
                $result = mysqli_query($conn, $query);

                
                    while ($row = mysqli_fetch_assoc($result)) {
                        $cid = $row['customer_id'];
                        $query2 = "SELECT * FROM user WHERE id = $cid";
                        $result2 = mysqli_query($conn, $query2);
                        $row2 = mysqli_fetch_assoc($result2);
                        ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row2['firstname']; ?> <?php echo $row2['lastname']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row2['contact']; ?></td>
                        </tr>
                        <?php
                    }
                } else {
                    echo '<tr><td colspan="4">No results found.</td></tr>';
                }
            
            ?>
            </table>
        </div>
    </div>
</body>
</html>

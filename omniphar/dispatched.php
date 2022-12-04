<?php

require_once('dbconn.php');
$query="select * from delivery_person";
$result= mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>dispatched deliveries</title>
        <link rel="stylesheet" href="css/dispatched.css">
    </head>
    <body>
        <div class="completebtn">
        <a href=""><button>Delivery Completion</button></a>
        </div>
        <?php
            while($row = mysqli_fetch_assoc($result))
            {
        ?>
        <div class="record">
            <table>
                <tr>
                    <th><?php echo $row['ID']; ?></th>
                    <th><?php echo $row['Address']; ?></th>
                    <th><?php echo $row['Contact']; ?></th>
                </tr>
            </table>
        </div>
        <?php
            }
        ?>
    </body>
</html>
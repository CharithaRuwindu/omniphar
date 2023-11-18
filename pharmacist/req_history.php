<?php
require_once('dbconn.php');
require_once('navbar.php');
require_once('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/req_history.css">
</head>
<body>

    <div class="content">
    <div class="topic"><h2 >Request History</h2></div>
            <div class="req_read">
            <table class="topics">
                    <tr>
                        <th>Request ID</th>
                        <th>Name</th>
                        <th>Submitted on</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
            </table>
            </div>
            
            <div class="record">
                <table class="details">
                <?php
                    $query="select * from leave_request where status = 'Accepted'";
                    $result= mysqli_query($conn,$query);

                        while($row = mysqli_fetch_assoc($result))
                        {
                            $d_id = $row['d_id'];

                            $query2="select * from user where id='$d_id'";
                            $result2= mysqli_query($conn,$query2);
                            $row2 = mysqli_fetch_assoc($result2);
                ?>
                        <tr>
                            <td><?php echo $row['req_id']; ?></td>
                            <td><?php echo $row2['firstname'];?> <?php echo $row2['lastname'];?></td>
                            <td><?php echo $row['submit_date']; ?></td>
                            <td><button class="accepted"><?php echo $row['status']; ?></button></td>
                            <td><a href="view_req.php?req_id=<?php echo $row['req_id']; ?>&d_id=<?php echo $row['d_id']; ?>"><button type="button" class="btn">view</button></a></td>
                        </tr>
                <?php
                        }
                        $query3="select * from leave_request where status = 'Rejected'";
                        $result3= mysqli_query($conn,$query3);

                        while($row3 = mysqli_fetch_assoc($result3))
                        {
                            $d_id = $row3['d_id'];

                            $query4="select * from user where id='$d_id'";
                            $result4= mysqli_query($conn,$query4);
                            $row4 = mysqli_fetch_assoc($result4);
                ?>
                            <td><?php echo $row3['req_id']; ?></td>
                            <td><?php echo $row4['firstname'];?> <?php echo $row4['lastname'];?></td>
                            <td><?php echo $row3['submit_date']; ?></td>
                            <td><button class="rejected"><?php echo $row3['status']; ?></button></td>
                            <td><a href="view_req.php?req_id=<?php echo $row3['req_id']; ?>&d_id=<?php echo $row3['d_id']; ?>"><button type="button" class="btn">view</button></a></td>

                <?php
                }
                ?>
                </table>
            </div>
            
        </div>
</body>
</html>

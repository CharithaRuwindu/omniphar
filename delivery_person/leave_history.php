<?php
    require_once('dbconn.php');
    require_once('header.php'); 
    require_once('navbar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/delivery_person/leave_history.css">
    <script src="https://kit.fontawesome.com/2816eb5ad3.js" crossorigin="anonymous"></script>
    <title> Customer Account </title>
    <link rel="icon" href="assets/omniphar.png">
</head>
<body>
    <div class="content">
    <div class="topic"><h2 >Leave History</h2></div>

          <div class="req_read">
                <table class="topics">
                        <tr>                 
                            <th>From</th>
                            <th>To</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                </table>
            </div>
            <div class="record">
                <table class="details">
                <?php
                    $uid = $_SESSION['uid'];
                    $query="select * from leave_request where status = 'pending'  AND d_id='$uid'";
                    $result= mysqli_query($conn,$query);

                    while($row = mysqli_fetch_assoc($result))
                    {
                    ?>
                            <tr>
                                <td><?php echo $row['from_date'];?></td>
                                <td><?php echo $row['to_date']; ?></td>
                                <td><button type="button" class="btn" id="pending"><?php echo $row['status']; ?></button></td>
                                <td><button type="button" class="more_btn" onclick="window.location.href='view_req.php?req_id=<?php echo $row['req_id']; ?>';"><span>More </span></button></td>
                            </tr>               
                    <?php
                        }
                    $query2="select * from leave_request where status = 'Accepted'  AND d_id='$uid'";
                    $result2= mysqli_query($conn,$query2);

                    while($row2 = mysqli_fetch_assoc($result2))
                    {
                    ?>
                            <tr>
                                <td><?php echo $row2['from_date'];?></td>
                                <td><?php echo $row2['to_date']; ?></td>
                                <td><button type="button" class="btn" id="accepted"><?php echo $row2['status']; ?></button></td>
                                <td><button type="button" class="more_btn" onclick="window.location.href='view_req.php?req_id=<?php echo $row2['req_id']; ?>';"><span>More </span></button></td>
                            </tr>
                    <?php
                    }
                    $query3="select * from leave_request where status = 'Rejected'  AND d_id='$uid'";
                    $result3= mysqli_query($conn,$query3);

                    while($row3 = mysqli_fetch_assoc($result3))
                    {
                    ?>
                            <tr>
                                <td><?php echo $row3['from_date'];?></td>
                                <td><?php echo $row3['to_date']; ?></td>
                                <td><button type="button" class="btn" id="rejected"><?php echo $row3['status']; ?></button></td>
                                <td><button type="button" class="more_btn" onclick="window.location.href='view_req.php?req_id=<?php echo $row3['req_id']; ?>';"><span>More </span></button></td>
                            </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
    
    </div>
</body>
</html>
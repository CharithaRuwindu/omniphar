
<?php
require_once('dbconn.php');
require_once('navbar.php');
require_once('header.php');
require_once('pro_req.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/view_req.css">
</head>
<body>
    <div class="content">
        <div class="topic"><h2 >View Request</h2></div>
        <div class="main_req">
            <?php
                $d_id = $_GET['d_id'];
                $req_id = $_GET['req_id'];
                $stat="select * from leave_request where d_id='$d_id' AND req_id ='$req_id'";
                $stat_result= mysqli_query($conn,$stat);
                $row_stat = mysqli_fetch_assoc($stat_result);

                $from_day = $row_stat['from_date'];
                $to_day = $row_stat['to_date'];

                $date1 = new DateTime($from_day);
                $date2 = new DateTime($to_day);
                $date3 = new DateTime($date2->format('Y-m-d') . ' +1 day');

                $difference = $date1->diff($date3);


                // get first name and last name

                $stat2="select * from user where id = '$d_id'";
                $stat_result2= mysqli_query($conn,$stat2);
                $row_stat2 = mysqli_fetch_assoc($stat_result2);
            ?>
                <table class="req_detail">
                        <tr>
                            <td>Request ID </td><td>:   <?php echo $row_stat['req_id']; ?></td>
                        </tr>
                        <tr>
                            <td>Delivery Person ID </td><td>:   <?php echo $row_stat['d_id']; ?></td>
                        </tr>
                        <tr>
                            <td>Name </td><td>:   <?php echo $row_stat2['firstname']; ?> <?php echo $row_stat2['lastname']; ?></td>
                        </tr>
                        <tr>
                            <td>Leave starting date </td><td>:   <?php echo $row_stat['from_date']; ?></td>
                        </tr>
                        <tr>
                            <td>Leave end date </td><td>:   <?php echo $row_stat['to_date']; ?></td>
                        </tr>
                        <tr>
                            <td>Number of days </td><td>:   <?php echo $difference->format('%a'); ?></td>
                        </tr>
                        <tr>
                            <td>Submitted on </td><td>:   <?php echo $row_stat['submit_date']; ?></td>
                        </tr>
                        <tr>
                            <td>Reason </td><td>:   <?php echo $row_stat['reason']; ?></td>
                        </tr>
                        <tr>
                            <td>Proof </td><td>: <img src="<?php echo $row_stat['proof']; ?>" alt="" class="proof"></td>
                        </tr>
                </table>
            <div class="status_btn">
            <?php
                if($row_stat['status']=='pending')
                {
            ?>
            <form action="" method="post">
                <a href="pro_req.php?req_id=<?php echo $row_stat['req_id']; ?>"><button class="req_accept" type="submit" name="req_accept"><i class='bx bx-check'></i> Accept</button></a>
                <a href="pro_req.php?req_id=<?php echo $row_stat['req_id']; ?>"><button class="req_reject" type="submit" name="req_reject"><i class='bx bx-x'></i>Reject</button></a>
            </form>
            <?php
                }else
                {
                    if($row_stat['status']=='Accepted')
                    {                
            ?>
                    <button class="accepted_req"><?php echo $row_stat['status'];?></button>
            <?php
                    }elseif($row_stat['status']=='Rejected')
                    {
            ?>
                    <button class="rejected_req"><?php echo $row_stat['status'];?></button>
            <?php
                    }
                }
            ?>
            </div>
                
        </div>

        <div class="sub_topic"><h3>Leave History</h3></div>
            <div class="req_read">
                <table class="topics">
                        <tr>
                            <th>Request ID</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Status</th>
                        </tr>
                </table>
            </div>
            <div class="record">
                <table class="details">
                <?php
                    $query="select * from leave_request where status = 'pending'  AND d_id='$d_id' AND req_id !='$req_id'";
                    $result= mysqli_query($conn,$query);

                    while($row = mysqli_fetch_assoc($result))
                    {
                    ?>
                            <tr onclick="window.location.href='view_req.php?req_id=<?php echo $row['req_id']; ?>&d_id=<?php echo $row['d_id']; ?>';">
                                <td><?php echo $row['req_id']; ?></td>
                                <td><?php echo $row['from_date'];?></td>
                                <td><?php echo $row['to_date']; ?></td>
                                <td><button type="button" class="btn" id="pending"><?php echo $row['status']; ?></button></td>
                            </tr>               
                    <?php
                        }
                    $query2="select * from leave_request where status = 'Accepted'  AND d_id='$d_id' AND req_id !='$req_id'";
                    $result2= mysqli_query($conn,$query2);

                    while($row2 = mysqli_fetch_assoc($result2))
                    {
                    ?>
                            <tr onclick="window.location.href='view_req.php?req_id=<?php echo $row2['req_id']; ?>&d_id=<?php echo $row2['d_id']; ?>';">
                                <td><?php echo $row2['req_id']; ?></td>
                                <td><?php echo $row2['from_date'];?></td>
                                <td><?php echo $row2['to_date']; ?></td>
                                <td><button type="button" class="btn" id="accepted"><?php echo $row2['status']; ?></button></td>
                            </tr>
                    <?php
                    }
                    $query3="select * from leave_request where status = 'Rejected'  AND d_id='$d_id' AND req_id !='$req_id'";
                    $result3= mysqli_query($conn,$query3);

                    while($row3 = mysqli_fetch_assoc($result3))
                    {
                    ?>
                            <tr onclick="window.location.href='view_req.php?req_id=<?php echo $row3['req_id']; ?>&d_id=<?php echo $row3['d_id']; ?>';">
                                <td><?php echo $row3['req_id']; ?></td>
                                <td><?php echo $row3['from_date'];?></td>
                                <td><?php echo $row3['to_date']; ?></td>
                                <td><button type="button" class="btn" id="rejected"><?php echo $row3['status']; ?></button></td>
                            </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>


    </div>
</body>
</html>
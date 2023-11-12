
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
    <link rel="stylesheet" href="../css/delivery_person/view_req.css">
</head>
<body>
    <div class="content">
        <div class="topic"><h2 >Request Info :</h2></div>
        <div class="main_req">
            <?php
                $req_id = $_GET['req_id'];
                $stat="select * from leave_request where req_id ='$req_id'";
                $stat_result= mysqli_query($conn,$stat);
                $row_stat = mysqli_fetch_assoc($stat_result);

                $from_day = $row_stat['from_date'];
                $to_day = $row_stat['to_date'];

                $date1 = new DateTime($from_day);
                $date2 = new DateTime($to_day);
                $date3 = new DateTime($date2->format('Y-m-d') . ' +1 day');

                $difference = $date1->diff($date3);
            ?>
                <table class="req_detail">
                        <tr>
                            <td>Request ID </td><td>:   <?php echo $row_stat['req_id']; ?></td>
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
                            <td>Selected Reason From Dropdown</td><td>:   <?php echo $row_stat['selected_reason']; ?></td>
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
                    <button class="pending_req"><?php echo $row_stat['status'];?></button>
                    <button class="cancel_req" onclick="window.location.href='pro_cancel_req.php?req_id=<?php echo $row_stat['req_id']; ?>';">cancel request</button>
            <?php
                
                    }
                    elseif($row_stat['status']=='Accepted')
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
                
            ?>
            </div>
                
        </div>

    </div>
</body>
</html>
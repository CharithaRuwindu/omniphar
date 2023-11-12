<?php
require_once('dbconn.php');
require_once('navbar.php');
require_once('header.php');
require_once('pro_leavereq.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/delivery_person/leaveform.css">
</head>
<body>
    <div class="content">
    <div class="topic"><h2 >Leave Form</h2></div>
    <div class="history"><a href="leave_history.php"><button class="leave_history">Leave History</button></a></div>
    <img src="../assets/leave.png" alt="leave_pic" class="leave_pic">
    <div class="leave_form">

        <p class="statement1">Enter your details about leave period</p>
        <form class="fill" method="POST" action="" enctype="multipart/form-data">
            <label class="from">From</label>
            <input type="date" id="from_date" name="from_date" min="<?php echo date('Y-m-d'); ?>">
            <label class="to">To</label>
            <input type="date" id="to_date" name="to_date" min="<?php echo date('Y-m-d'); ?>" onchange="setdate()"><br>
            <hr>
            <label class="reason">State your reason</label>
            <textarea class="reason2" name="reason"></textarea><br>
            <hr>

            <!-- task -->
            

            <label class="reason">Reason</label>
            <select name="selected_reason" required>
            <?php
            $sql = "SELECT * from reason_dropdown";
            $result3 = mysqli_query($conn, $sql);
            while($row3 = mysqli_fetch_assoc($result3))
            {
            ?>
                <option value="<?php echo $row3['reason'];?>"><?php echo $row3['reason'];?></option>
            
                <?php
            }
            ?>
                
            </select><br>
            <hr>

            


            <!-- task -->






            <label class="proof">Provide proof if available</label><br>
            <input type="file" class="choose" name="proof">
            <br>
            <button class="submit" name="btn">Submit</button>

            <script>
                function setdate() {
                    var from_date = new Date(document.getElementById("from_date").value);
                    var to_date = new Date(document.getElementById("to_date").value);
                    
                    if (to_date < from_date) {
                    document.getElementById("to_date").value = "";
                    to_date = from_date;
                    }
                    
                    var minDate = from_date.toISOString().slice(0, 10);
                    document.getElementById("to_date").setAttribute("min", minDate);
                }
            </script>
        </form>
    </div>
    </div>
</body>
</html>
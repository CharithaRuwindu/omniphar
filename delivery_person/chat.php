
<?php
    require_once('dbconn.php');
    require_once('pro_chat.php');
    require_once('header.php'); 
    require_once('navbar.php');

    $uid = $_SESSION['uid'];

    $query3 = "SELECT * FROM  chat WHERE sender_id = '$uid' OR receiver_id = '$uid'";
    $result3 = mysqli_query($conn, $query3);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/delivery_person/chat.css">
    <title>OMNIphar</title>
</head>
<body>
    <div class="content">
        <h2>Support Inbox</h2>
        <img src="../assets/support.png" alt="support" class="support">

        <div class="area">
            <div class="msgarea">
                    

                    <!-- outgoing -->
                            
                        <?php
                        while($row3 = mysqli_fetch_assoc($result3)){
                                if($row3['sender_role'] == 'delivery_person'){ 
                        ?>
                        <div class="reply_pic">
                            <img src="<?php echo $_SESSION['photo'];?>" alt="">
                        </div>
                        <input type="text" class="reply" value= "<?php echo $row3['message']; ?>" readonly>
                <!-- incoming -->
                    <?php 
                            }else{
                                
                    ?>
                        <div class="message_pic">
                        <img src="../assets/logo.png" alt="logo" class="logo">
                        </div>
                        <input type="text" class="msg" value="<?php echo $row3['message']; ?>" readonly>
                    <?php
                            }
                        }
                            ?>

            
            </div>
            
           
        
            <!-- typing_area -->
            <!-- <div class="typingarea"> -->
                <form action="#"  method="POST" class="area2" >
                    <div class="send_box">
                        <input type="text" class="type" name="outgoing" placeholder="Type your text">
                        <button type="submit"  name="send"  class="send" > send </button>
                    <!-- </div> -->
                </form>
            </div>

        </div>

    </div>

</body>
</html>
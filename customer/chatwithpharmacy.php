
<?php
    require_once('dbconn.php');
    require_once('pro_chat.php');
    require_once('headerforall.php'); 
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
    <link rel="stylesheet" href="css/chatwithpharmacy.css">
    <title>OMNIphar</title>
</head>
<body>
    <div class="content">
        <h2>Customer Support</h2>
        <img src="assets/support.png" alt="support" class="support">

        <div class="area">
            <div class="msgarea">
                <!-- incoming -->
                    <div class="message_pic">
                        <img src="assets/logo.png" alt="logo" class="logo">
                    </div>

                 
                    <input type="text" class="msg" value="hi how can i help" readonly>

                    <!-- outgoing -->
                            
                        <?php
                        while($row3 = mysqli_fetch_assoc($result3)){
                                if($row3['sender_role'] == 'customer'){ 
                        ?>
                        <div class="reply_pic">
                            <img src="<?php echo $_SESSION['photo'];?>" alt="user2" class="user2">
                        </div>
                        <input type="text" class="reply" value= "<?php echo $row3['message']; ?>" readonly>

                    <?php 
                            }else{
                    ?>
                        <div class="message_pic">
                        <img src="assets/logo.png" alt="logo" class="logo">
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
<?php
    require_once('dbconn.php');
    require_once('header.php');
    require_once('navbar.php');

    $userID = $_SESSION['uid'];

    $query1 = "SELECT * FROM user WHERE role = 'delivery_person' OR role = 'customer'";
    $result1 = mysqli_query($conn, $query1);

    
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Side Navbar - Tivotal</title>
    <link rel="stylesheet" href="css/chat_names.css" />
    <script src="https://kit.fontawesome.com/2816eb5ad3.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
    <section class="home">
        <div class="body">
            <main class="main-container">
                <div class="main-title">
                    <p class="font-weight-bold">CHAT MESSAGES</p>
                </div>
                <hr>

                <?php

        if(mysqli_num_rows($result1) > 0){
            while($row1 = mysqli_fetch_assoc($result1)){

                $id = $row1['id'];
                $fName = $row1['firstname'];
                $lName = $row1['lastname'];
                $profilePhoto = $row1['photo'];
                $role = $row1['role'];

                if($role == 'delivery_person'){
                    $roleName = 'Delivery Person';
                }else{
                    $roleName = 'Customer';
                }

                // retrieve unread message count
                $query2 = "SELECT COUNT(*) as count FROM chat WHERE sender_id = $id AND receiver_id = $userID AND status = '1'";
                $result2 = mysqli_query($conn, $query2);
                $row2 = mysqli_fetch_assoc($result2);

                $unreadMessage = $row2['count'];

                echo '
                    <div class="chats-name-hover">
                    <a href="chat.php?ID='.$id.'">
                        <img src="'.$row1['photo'].'" alt="Avatar" style="width:100%;">
                        <div class="name-font">'.$fName.' '.$lName.'</div>
                        <div class="unread">'.$unreadMessage.'</div><br>
                        <div>Role - '.$roleName.'</div>
                    </a>
                    </div>';

            }
            
        }
      ?>
        </div>
        <br><br><br>
      </main>
        </div>
    </section>
</body>

</html>
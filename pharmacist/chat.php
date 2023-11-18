<?php
    require_once('dbconn.php');
    require_once('header.php');
    require_once('navbar.php');
    
    $userID = $_SESSION['uid'];
    $memberID = $_GET['ID'];
    

    $query = "SELECT * FROM user Where id = $memberID"; 
    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){

        $id = $row['id'];
        $fName = $row['firstname'];
        $lName = $row['lastname'];
        $profilePhoto = $row['photo'];
        $role = $row['role'];

      }
    }

  if(isset($_POST['send']) && !empty($_POST['message'])){

    $message = $_POST['message'];
    $sender_id = $userID;
    $receiver_id = $memberID;
    $status = 1; // unread message = 1  read message = 0

    $query1 = "INSERT INTO chat 
                (sender_id, receiver_id, message, status) VALUES
                ('$sender_id','$receiver_id','$message','$status')";

    $result1 = mysqli_query($conn, $query1);

    // if($result1){
    //   header("Location:chat.php");
    //   exit();
    // }
  }

  $query4 = "UPDATE chat SET status = 0 WHERE sender_id = $memberID AND receiver_id = $userID";
  $result4 = mysqli_query($conn, $query4);

  // retrieve all dates of this chat
  $query2 = "SELECT DISTINCT DATE(dateTime) AS chatDate from chat WHERE ((sender_id = $userID AND receiver_id = $memberID) OR (sender_id = $memberID AND receiver_id = $userID))";
  $result2 = mysqli_query($conn, $query2);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Side Navbar - Tivotal</title>
    <link rel="stylesheet" href="css/chat.css" />
    <script src="https://kit.fontawesome.com/2816eb5ad3.js" crossorigin="anonymous"></script>
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
  <section class="home">
      <div class="body">
      <main class="main-container">

<div class="chat">

  <div class="main-title2">
    <p><?php echo $fName .' '. $lName?></p>
    <hr>
  </div>

  <div class="chatcontent">

  <?php 
  
  if(mysqli_num_rows($result2)){
    while($row2 = mysqli_fetch_assoc($result2)){

      $date = $row2['chatDate'];

      echo '<div class="date1">'.$date.'</div>';
      
      $query3 = "SELECT * FROM chat WHERE ((sender_id = $userID AND receiver_id = $memberID) OR (sender_id = $memberID AND receiver_id = $userID)) AND DATE(dateTime) = '$date' ORDER BY dateTime ASC";
      $result3 = mysqli_query($conn, $query3);

      if(mysqli_num_rows($result3) > 0){
        while($row3 = mysqli_fetch_assoc($result3)){
          
          $message = $row3['message'];
          $messagesender_id = $row3['sender_id'];
          $messagereceiver_id = $row3['receiver_id'];
          $time = date('H:i', strtotime($row3['dateTime'])); //$time = date('Y-m-d H:i:s', strtotime($row5['dateTime']));

          $class = ($messagesender_id == $userID) ? 'container darker' : 'container' ;

          echo '
          <div class="'.$class.'">
            <p>'.$message.'</p>
            <span class="time-right">'.$time.'</span>
          </div>
          <br><br><br><br>
          ';
        }
      }

    }
  }

  ?>
  
    <div class="type1">
        <form action="" method = "post">
          <input type="text" placeholder="    Type your message here" name="message">
          <button name="send" class="send"><i class='bx bxs-send'></i></button>
    </div>
  </div>

</div>
</section>
</body>
</html>
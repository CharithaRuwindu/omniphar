<?php
require_once('dbconn.php');
require_once('headerforall.php');


// insert data
if(isset($_POST['send'])){

    $uid = $_SESSION['uid'];
    $message = $_POST['outgoing'];

    $query = "INSERT INTO chat (sender_role, receiver_role, sender_id, message) VALUES('customer', 'pharmacist','$uid','$message')";
    $result = mysqli_query($conn, $query);

}



?>
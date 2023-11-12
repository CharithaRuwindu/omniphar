<?php
require_once('dbconn.php');

    $req_id = $_GET['req_id'];
    $query = "DELETE from leave_request WHERE req_id = '$req_id' AND status = 'pending'";
    $result = mysqli_query($conn, $query);

    if($result){
        header("location:leave_history.php");
    }
    else{
        echo "error while canceling";
    }

?>
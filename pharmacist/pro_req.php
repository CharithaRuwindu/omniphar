<?php
require_once('dbconn.php');
session_start();

$req_id = $_GET['req_id'];

if(isset($_POST['req_accept'])){
    $query1="UPDATE leave_request SET status='Accepted'  WHERE req_id=$req_id";
    $result1= mysqli_query($conn,$query1);
}elseif(isset($_POST['req_reject'])){
    $query2="UPDATE leave_request SET status='Rejected'  WHERE req_id=$req_id";
    $result2= mysqli_query($conn,$query2);
}
?>
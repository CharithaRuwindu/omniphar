<?php 
require_once('dbconn.php');

// Get order ID from URL parameter
$id = $_GET['id'];


$query="UPDATE orders SET status='packed'  WHERE id=$id";


$result= mysqli_query($conn,$query);

if($result){
    header("location:orders.php");
}
else{
    echo 'unfortunately an error occured';
}
?>
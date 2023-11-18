<?php 
require_once('dbconn.php');

// Get order ID from URL parameter
$id = $_GET['id'];

$sql = "select * from orders where id = $id";
$output = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($output);


if($row['prefer']=='onsite'){
$query="UPDATE orders SET status='packed'  WHERE id=$id";


$result= mysqli_query($conn,$query);

if($result){
    header("location:orders.php");
}
else{
    echo 'unfortunately an error occured';
}
}
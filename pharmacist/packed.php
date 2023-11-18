<?php 
require_once('dbconn.php');

// Get order ID from URL parameter
$id = $_GET['id'];

$sql = "select * from orders where id = $id";
$output = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($output);


if($row['prefer']=='onsite'){
$query="UPDATE orders SET status='completed', delivery_date = NOW(), delivery_time = NOW()  WHERE id=$id";


$result= mysqli_query($conn,$query);

if($result){
    header("location:orders.php");
}
else{
    echo 'unfortunately an error occured';
}
}

elseif($row['prefer']=='deliver'){
$query2="UPDATE orders SET status='dispatched'  WHERE id=$id";
$result2= mysqli_query($conn,$query2);

if($result2){
    header("location:orders.php");
}
else{
    echo 'unfortunately an error occured';
}
}

?>

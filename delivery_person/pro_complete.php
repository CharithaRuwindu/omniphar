<?php
require_once('dbconn.php');
$oid = $_GET['oid'];

$query="UPDATE orders SET status='delivered'  WHERE id=$oid";
$query1="UPDATE orders SET delivery_date = NOW() WHERE id=$oid";
$query2="UPDATE orders SET delivery_time = NOW() WHERE id=$oid";

$result= mysqli_query($conn,$query);
$result1= mysqli_query($conn,$query1);
$result2= mysqli_query($conn,$query2);

if($result){
    header("location:new.php");
}
else{
    echo 'unfortunately an error occured';
}
?>
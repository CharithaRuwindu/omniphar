<?php
require_once('dbconn.php');
$uid = $_GET['uid'];
$med_id = $_GET['med_id'];
$dosage = $_GET['dosage'];

$query = "DELETE from cart WHERE uid = '$uid' AND med_id = '$med_id' AND dosage = '$dosage'";
$result = mysqli_query($conn,$query);

if($result){
    header("location:viewcart.php");
}
else{
    echo "error happened on deletion";
}

?>
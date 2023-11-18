<?php

require_once('dbconn.php');

    $oid = $_GET['oid'];
    $id = $_GET['id'];

    $query="UPDATE orders SET delivery_person_id='$id' WHERE id=$oid";
    $result = mysqli_query($conn, $query);
    $query="UPDATE orders SET status='packed' WHERE id=$oid";
    $result = mysqli_query($conn, $query);
    header("location:orders.php");
?>
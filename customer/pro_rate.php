<?php
require_once('dbconn.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {
            
    // Get form data
    $oid = $_POST['oid'];
    $rate_ph = $_POST['rate1'];
    $pharmacyComment = $_POST['phar-comments'];
    $rate_deli = $_POST['rate2'];
    $deliveryComment = $_POST['dperson_comments'];
    

    // Insert data into the database
   
    $query1 =  "INSERT INTO feedback (order_ID,prate,pComment,drate,dcomment) VALUES ('$oid','$rate_ph','$pharmacyComment','$rate_deli', '$deliveryComment')";
    $result1 = mysqli_query($conn, $query1);

        if ($result1) { 
            header('Location: pro_rate_view.php?oid=' . $oid); }
        else{
        echo "error";
        }
    }


?> 






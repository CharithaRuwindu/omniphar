<?php
    require_once('dbconn.php');
    if (isset($_POST['save_btn'])){

    $d_id = $_POST['d_id'];
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $nic = $_POST['nic'];

    $sql = "UPDATE user SET firstname='".$f_name."', lastname='".$l_name."', contact='".$contact."', address='".$address."', nic='".$nic."' WHERE id=$d_id";
    $result= mysqli_query($conn,$sql);
    }
?>
<?php
require_once('dbconn.php');
session_start();

if (isset($_POST['btn'])){

    $uid = $_SESSION['uid'];
    $from_date = $_POST['from_date'];
    $to_date = $_POST['to_date'];
    $reason = $_POST['reason'];
    $submit_date = date("Y-m-d H:i:s");
    $status = "pending";
    $selected_reason = $_POST['selected_reason'];

    $proof = $_FILES['proof'];
    $directory = "../assets/";

    $images   = $_FILES["proof"]["name"];
    $size_check = getimagesize($_FILES["proof"]["tmp_name"]);
    $img_type  = strtolower(pathinfo($_FILES["proof"]["name"],PATHINFO_EXTENSION));
    $path  = $directory.basename($images);

    if($size_check !== false){
        if($_FILES["proof"]["size"] < 50000000){
            if($img_type == 'jpg' || $img_type == 'jpeg' || $img_type == 'png'){
                $result = move_uploaded_file($_FILES["proof"]["tmp_name"],$path);
                if($result){
                    $query2 = "INSERT into leave_request(d_id, submit_date, from_date, to_date, reason, status, proof, selected_reason) values('$uid','$submit_date','$from_date','$to_date','$reason','$status', '$path', '$selected_reason')";
                    $result2 = mysqli_query($conn, $query2);

                    if($result2){
                        echo 'request sent';
                    }else{
                        echo 'request not sent';
                    }
                } else {
                    echo "Upload failed";
                }
            } else {
                echo "Invalid file type";
            }
        } else {
            echo "File size is too large";
        }
    } else {
        echo "Invalid file";
    }

    
    }



?>
<?php
    require_once('dbconn.php');
    require_once('header.php');
    require_once('navbar.php');

    if(isset($_GET["id"])){
        $id = $_GET["id"];

        // Define DELETE query
        $sql = "DELETE FROM medical_devices WHERE id = $id"; 

        // Execute the query
        if(mysqli_query($conn, $sql)){
            // Redirect to a specific page
            header("Location: all_devices.php");
            exit();
        } else{
            echo "Error deleting record: " . mysqli_error($conn);
        }
    }
?>


<?php
    require_once('dbconn.php');
    require_once('header.php');
    require_once('navbar.php');

    if(isset($_GET["med_Id"])){
        $med_Id = $_GET["med_Id"];

        // Define DELETE query
        $sql = "DELETE FROM medicine WHERE med_Id = $med_Id"; 

        // Execute the query
        if(mysqli_query($conn, $sql)){
            // Redirect to a specific page
            header("Location: all_med.php");
            exit();
        } else{
            echo "Error deleting record: " . mysqli_error($conn);
        }
    }
?>


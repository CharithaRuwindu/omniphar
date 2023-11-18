<?php
    require_once('dbconn.php');

    
        $id = $_GET['id'];

        // Define DELETE query
        $sql = "DELETE FROM wellness WHERE id = $id"; 
        $result = mysqli_query($conn, $sql);

        // Execute the query
        if($result){
            // Redirect to a specific page
            header("Location:all_wellness.php");
        } else{
            echo "Error deleting record: " . mysqli_error($conn);
        }
    
?>


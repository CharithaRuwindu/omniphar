<?php
require_once('dbconn.php');

if(isset($_POST['sub_btn'])) {

    // Get form data
    $pharmacyComment = $_POST['phar-comments'];

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Insert data into the database
    else{
    $query =  "INSERT INTO feedback (pComment) VALUES ('$pharmacyComment')";
    $result = mysqli_query($conn, $query);

        if ($result) {
        echo "New record created successfully"; }
        else{
        echo "error";
        }
    }

}
mysqli_close($conn)
?> 


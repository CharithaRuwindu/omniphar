<?php 
require_once('dbconn.php');

// Check if form is submitted
if (isset($_POST['update'])){
    // Get form data
    $pname = $_POST["pname"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $address = $_POST["address"];
  
    // Prepare and execute SQL query
    $sql = "UPDATE pharmacy_info SET pname='".$pname."', contact='".$contact."', email='".$email."', address='".$address."' WHERE id=1";
    $result= mysqli_query($conn,$sql);
    // $stmt = mysqli_prepare($conn, $sql);
    // mysqli_stmt_bind_param($stmt, "ssss", $pname, $contact, $email, $address);
    // $result = mysqli_stmt_execute($stmt);
  
    if ($result) {
        echo "Record updated successfully!";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
  
  }
  
?>
<?php

    require_once('dbconn.php');

    
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $id = $_POST["id"];
  $pname = $_POST["pname"];
  $contact = $_POST["contact"];
  $email = $_POST["email"];
  $address = $_POST["address"];

  // Prepare and execute SQL query
  $sql = "UPDATE pharmacy_info SET pname=?, contact=?, email=?, address=?, WHERE id=?";
  $stmt = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($stmt, "ssssi", $pname, $contact, $email, $address, $id);
  $result = mysqli_stmt_execute($stmt);

  if ($result) {
      echo "Record updated successfully!";
  } else {
      echo "Error updating record: " . mysqli_error($conn);
  }

  // Close statement
  mysqli_stmt_close($stmt);
}
// Retrieve user details from database
$id = isset($_GET["id"]) ? $_GET["id"] : null; // Check if id parameter is set
// If id is not set or empty, assign a hardcoded value
if (!$id) {
  $id = 1; 
}
if ($id) {
    $sql = "SELECT * FROM pharmacy_info WHERE id=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $user = mysqli_fetch_assoc($result);

    // Close statement
    mysqli_stmt_close($stmt);
}

// Close connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    
  </head>
  <body>
  <section class="home">
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <input type="hidden" name="id" value="<?php echo $user["id"]; ?>">
        <label for="name">Name:</label>
        <input type="text" name="pname" value="<?php echo $user["pname"]; ?>">
        <br>
        <label for="contact">contact:</label>
        <input type="text" name="contact" value="<?php echo $user["contact"]; ?>">
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $user["email"]; ?>">
        <br>
        <label for="address">address:</label>
        <input type="tex" name="address" value="<?php echo $user["address"]; ?>">
        <br>
        <input type="submit" value="Update">
    </form>
    </section>
  
  </body>
</html>

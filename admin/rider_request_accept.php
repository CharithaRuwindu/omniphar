<?php
require_once('dbconn.php');

// If the button is clicked


  $reqid = $_GET['reqid'];
  // Select the data from the source table
  $sql = "SELECT * FROM delivery_person_requests WHERE id=$reqid";

  $result = mysqli_query($conn, $sql);

  // If there are rows in the result set
  if (mysqli_num_rows($result) > 0) {

    // Insert the data into the destination table
    while($row = mysqli_fetch_assoc($result)) {
      $sql2 = "INSERT INTO user (email, password, firstname, lastname, address, contact, nic, role, photo)
       VALUES ('" . $row["email"] . "', '" . $row["password"] . "', '" . $row["first_name"] . "', '" . $row["last_name"] . "', '" . $row["address"] . "', '" . $row["contact"] . "',
        '" . $row["NIC"] . "', 'delivery_person','" . $row["photo"] . "')";

      if ($conn->query($sql2) === TRUE) {

        $mail = $row['email'];
        $sql3 = "SELECT * from user WHERE email = '$mail'";
        $sql3_result = mysqli_query($conn, $sql3);
        $row3 = mysqli_fetch_assoc($sql3_result);
        $d_id = $row3['id'];

        $sql4 = "INSERT into delivery_person(d_id, vehicle_type, license_plate, license_p_image, License_image_front, License_image_back)
        VALUES ('$d_id', '" . $row["vehicle"] . "', '" . $row["license_plate"] . "', '" . $row["plate_img"] . "', '" . $row["l_plate_front"] . "', '" . $row["l_plate_back"] . "')";

        if ($conn->query($sql4) === TRUE) {
        $email = $row["email"];
        $del_query = "DELETE FROM delivery_person_requests WHERE email = '$email'";
        $del_result = mysqli_query($conn,$del_query);
        header("location:rider_requests.php");
        }
      } else {
        echo "Error transferring data: " . $conn->error;
      }
    }

  } else {
    echo "No data to transfer";
  }


// Close the database connection
// $conn->close();
?>

<!-- HTML code for the button -->
<!-- <form method="post">
  <input type="submit" name="submit" value="Transfer data">
</form> -->

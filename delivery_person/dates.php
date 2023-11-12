<?php
// Connect to the MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "omniphar";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the two dates from the database
$sql = "SELECT * FROM leave_request where req_id = '4'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $date1 = $row["from_date"];
    $date2 = $row["to_date"];
}

// Convert the dates to UNIX timestamps
$timestamp1 = strtotime($date1);
$timestamp2 = strtotime($date2);

// Calculate the number of days between the two dates
$days_between = abs($timestamp2 - $timestamp1) / 86400;

// Display the calendar
echo "<table>";
for ($i = 0; $i <= $days_between; $i++) {
    $day_timestamp = strtotime("+" . $i . " day", $timestamp1);
    $day = date("j", $day_timestamp);
    $month = date("n", $day_timestamp);
    $year = date("Y", $day_timestamp);
    
    // Highlight the days between the two dates
    if ($i > 0 && $i < $days_between) {
        echo "<td style='background-color: yellow;'>" . $day . "</td>";
    } else {
        echo "<td>" . $day . "</td>";
    }
    
    // Start a new row every 7 days
    if ($i % 7 == 6) {
        echo "</tr><tr>";
    }
}
echo "</table>";

// Close the database connection
$conn->close();
?>

<?php
require_once('dbconn.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>OMNIphar</title>
    <link rel="stylesheet" href="css/summery_report.css">
</head>

<body>
    <div>
        <div class="main_topic">
            <center>
                <h1>Monthly report</h1>
                <h2>January</h2>
            </center>
        </div>
        <br>
        <div class="sub_topic">
            <center>
                <h3>prepared by</h3>
                <h3>OMNIphar</h3>
            </center>
        </div>
        <div class="container">
            <div>
                <!-- ....................................... -->
                <span>Key performance indicators</span> <br>
                <p>Listed below are the company's profit and loss statement for December and january</p><br>
                <table border="1">
                    <tr>
                        <td>Description</td>
                        <td>December</td>
                        <td>January</td>
                    </tr>
                    <tr>
                        <td>Sales</td>
                        <td>$2,345,000</td>
                        <td>$2,345,000</td>
                    </tr>
                </table>
            </div>

            <!-- ....................................... -->
            <div class="mid_line"></div>
            <!-- ....................................... -->
            <div>
                <span>Sales analisys</span><br>
                <br>
                <br><br><br><br><br><br><br><br><br>


            </div>
        </div>




        <div class="container2">
            <!-- .............................................. -->
            <div>
                <span>Product delivery status for the month</span><br>
                <table border="1">
                    <tr>
                        <td>Processing</td>
                        <td>
                            <?php
                                $query = "SELECT COUNT(*) as processing FROM orders WHERE status = 'processing'";
                                $result = mysqli_query($conn, $query);
                                $row = mysqli_fetch_assoc($result);
                                $processing = $row['processing'];
                                echo $processing;
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Packed</td>
                        <td>
                            <?php
                                $query = "SELECT COUNT(*) as packed FROM orders WHERE status = 'packed'";
                                $result = mysqli_query($conn, $query);
                                $row = mysqli_fetch_assoc($result);
                                $packed = $row['packed'];
                                echo $packed;
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Dispatched</td>
                        <td>
                            <?php
                                $query = "SELECT COUNT(*) as dispatched FROM orders WHERE status = 'dispatched'";
                                $result = mysqli_query($conn, $query);
                                $row = mysqli_fetch_assoc($result);
                                $dispatched = $row['dispatched'];
                                echo $dispatched;
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Completed</td>
                        <td>
                            <?php
                                $query = "SELECT COUNT(*) as completed FROM orders WHERE status = 'completed'";
                                $result = mysqli_query($conn, $query);
                                $row = mysqli_fetch_assoc($result);
                                $completed = $row['completed'];
                                echo $completed;
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Canceled</td>
                        <td>
                            <?php
                                $query = "SELECT COUNT(*) as canceled FROM orders WHERE status = 'canceled'";
                                $result = mysqli_query($conn, $query);
                                $row = mysqli_fetch_assoc($result);
                                $canceled = $row['canceled'];
                                echo $canceled;
                            ?>
                        </td>
                    </tr>
                </table>
            </div>
            <!-- ................................... -->
            <div class="mid_line"></div>
            <!-- ................................... -->
            <div>
                <span>Best rated Riders</span><br>
                <?php
// connect to database

require_once('dbconn.php');

$conn = new PDO("mysql:host=$server;dbname=$database", $username, $password);


// select top 3 riders with highest average ratings
$sql = "SELECT order_ID, AVG(dRate) AS avg_rate FROM feedback GROUP BY order_ID ORDER BY avg_rate DESC LIMIT 3";
$stmt = $conn->prepare($sql);
$stmt->execute();
$riders = $stmt->fetchAll(PDO::FETCH_ASSOC);

// display riders in a table
echo "<table>";
echo "<tr><th>Rider ID</th><th>Average Rate</th></tr>";
foreach ($riders as $rider) {
  echo "<tr><td>".$rider['order_ID']."</td><td>".$rider['avg_rate']."</td></tr>";
}
echo "</table>";

// close database connection
$conn = null;
?>
            </div>
            <!-- ........................................... -->
        </div>
    </div>
</body>

</html>
<?php
    require_once('header-1.php');
    require_once('navbar.php');
    require_once('dbconn.php');
?>

<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" href="css/inventory_alerts.css" type="text/css">
    </head>

	<body> 
    <section class="home">
    <div class="topicleft">
                <h2>INVENTORY ALERTS: Out of stocks</h2><br>
            </div>
<div class="">
<table border="1">
    <tr>
        <th>Brand name</th>
        <th>Brand</th>
        <th>Reorder</th>
        <th>Available quantity</th>
    </tr>
<?php
    $query = "SELECT * FROM item";
    $result = mysqli_query($conn, $query);
    
    while($row = mysqli_fetch_assoc($result)) {

        $medicine_quantity = $row['quantity']; // fetch the medicine quantity from database
        $reorder_level = $row['reorder']; // fetch the reorder level from database

        if($row['category']=='Medicine'){
            $sql = "SELECT * FROM dosage WHERE med_id = '".$row['med_Id']."'";
            $result2 = mysqli_query($conn, $sql);

            while($row2 = mysqli_fetch_assoc($result2)){
                $medicine_quantity = $row2['quantity'];

                if ($medicine_quantity < $reorder_level) {
                    echo "<tr>";
                    echo "<td>" . $row['name'] ." ". $row2['dose'] . "mg". "</td>";
                    echo "<td>" . $row['brand'] . "</td>";
                    echo "<td>" . $row['reorder'] . "</td>";
                    echo "<td>" . $row2['quantity'] . "</td>";
                    echo "</tr>";
                }

            }
        }
        
        elseif ($medicine_quantity < $reorder_level) {
            echo "<tr>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['brand'] . "</td>";
            echo "<td>" . $row['reorder'] . "</td>";
            echo "<td>" . $row['quantity'] . "</td>";
            echo "</tr>";
        }
    }
?>

                <!-- <tr>
                    <th>Item</th>
                    <th>Available quantity</th>
                </tr>
                <tr>
                    <td>Charitha Ruwindu</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>Dewmini Rathnawardhana</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>Theekshani Buddhima</td>
                    <td>2</td>
                </tr> -->
            </table>
</div>

    </section>


    </body>
</html>

        


        

<?php
    require_once('header-1.php');
    require_once('navbar.php');
    require_once('dbconn.php'); 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/delivery_persons.css">

</head>

<body>
    <div class="div_upper"></div>
    <div class="content">
        <div class="products">
            <?php 

if(isset($_POST['submit'])) {
    $search = $_POST['search'];

    // Search for matching rows in the 'medicine' table
    $medicine_query = "SELECT * FROM item WHERE name LIKE '%$search%' or brand LIKE '%$search%' or description LIKE '%$search%'";
    $medicine_result = mysqli_query($conn, $medicine_query); 
    
    // Search for matching rows in the 'rider' table
    $user_query = "SELECT * FROM user WHERE firstname LIKE '%$search%' or lastname LIKE '%$search%'";
    $user_result = mysqli_query($conn, $user_query); 
    
    // Output the results for the 'medicine' table
    if($medicine_result) {

        while($row2 = mysqli_fetch_assoc($medicine_result)) {
            // Output the result for the 'medicine' table

            ?>
            <section class="home">
                <div class="div1">

                <table class="mytbl">
                            <tr>
                                <th>Name</th>
                                <th>Brand</th>
                                <th>Reorder Level</th>
                                <th>Available quantity</th>
                            </tr>
                            <tr>
                                <td> <?php echo $row2['name']; ?></td>
                                <td> <?php echo $row2['brand']; ?> </td>
                                <td> <?php echo $row2['reorder']; ?></td>
                                <td> <?php echo $row2['quantity']; ?></td>
                                </td>
                            </tr>

                        </table>
                </div>
            </section>
            <?php
        }
    } else {
        echo "0 results";
    }

    // Output the results for the 'rider' table
    if($user_result) {
        while($row2 = mysqli_fetch_assoc($user_result)) {
            // Output the result for the 'rider' table
            ?>
            <section class="home">
                <div class="div1">
                    <div class="div1">
                        <div>
                            <h1><?php echo $row2['role']; ?></h1>
                        </div>
                        <table class="mytbl">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contacts</th>
                                <th>NIC</th>
                            </tr>
                            <tr>
                                <td> <?php echo $row2['firstname']; ?> <?php echo $row2['lastname']; ?></td>
                                <td> <?php echo $row2['email']; ?> </td>
                                <td> <?php echo $row2['contact']; ?></td>
                                <td> <?php echo $row2['nic']; ?></td>
                                </td>
                            </tr>

                        </table>
                    </div>
            </section>
            <?php
            
        }
    } else {
        echo "0 results";
        
    }
  

    

    
} else {
    // Output the default results (i.e. from the 'medicine' table)
    $query="SELECT * from item";
    $result= mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($result)) {
        // Output the result for the 'medicine' table
        
    }
}


        ?>

        </div>
    </div>
</body>

</html>
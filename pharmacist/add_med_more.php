<?php
    require_once('header.php');
    require_once('navbar.php');
    require_once('dbconn.php');
    
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

    if(isset($_POST['submit'])){
      
    //   $med_id = '5';
      $id = $_GET['med_id'];
      $dosage = $_POST['dose'];
      $price = $_POST['price'];
      $quantity = $_POST['quantity'];

      for($i = 0; $i < count($dosage); $i++){

        $dosage_i = $dosage[$i];
        $price_i = $price[$i];
        $quantity_i = $quantity[$i];

        $query = "INSERT INTO dosage
                 (med_id, dose, price, quantity) VALUES
                 ('$med_id', '$dosage_i', '$price_i', '$quantity_i') ";
        
        $result = mysqli_query($conn, $query);

      }

    }
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Side Navbar - Tivotal</title>
    <link rel="stylesheet" href="css/add_med_more.css" />
    <script src="https://kit.fontawesome.com/2816eb5ad3.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
    <section class="home">
        <div class="body">

            <!-- Main -->
            <main class="main-container">
                <div class="main-title">
                    <p class="font-weight-bold">ADD MEDICINE</p>
                </div>

                <div class="form1">

                    <div class="container">

                        <form action="all_med.php" method="POST">
                        
                                <button type="button" class="med_button" onclick="doubleFields()"><span
                                        class="bx bx-add-to-queue text-cyan"></span> Add Fields</button><br>
                                <div id="input-fields">

                                    <label for="dosage">Dosage/s</label>
                                    <input type="text" id="dose" name="dose[]" placeholder="Enter dose here">
                                    <br>

                                    <label for="price">Price(Rs.)</label>
                                    <input type="text" id="price" name="price[]" placeholder="Enter price here">

                                    <label for="quantity">Quantity</label>
                                    <input type="text" id="quantity" name="quantity[]" placeholder="Enter quantity">
                                   <br><hr>
                                </div>
                    
                                <!-- <button type="button" class="med_button" onclick="doubleFields()">Add Fields</button> -->
                                <button name="submit" type="submit" class="med_button2">Submit</button>
                                <a href="add_med_more.php"><input type="button" class="med_button2" value="Cancel"></a>
                                <br> <br> <br>
                            
                        </form>

                        <script>
                        function doubleFields() {
                            // Get the container element for the input fields
                            const inputFields = document.getElementById("input-fields");

                            // Clone the first set of input fields
                            const clonedFields = inputFields.cloneNode(true);

                            // Clear the values of the cloned input fields
                            const clonedInputs = clonedFields.querySelectorAll("input");
                            clonedInputs.forEach((input) => {
                                input.value = "";
                            });

                            // Add the cloned input fields to the container
                            inputFields.parentNode.insertBefore(clonedFields, inputFields.nextSibling);
                        }
                        </script>

                    </div>
                </div>
        </div>
        </div>
    </section>
</body>

</html>
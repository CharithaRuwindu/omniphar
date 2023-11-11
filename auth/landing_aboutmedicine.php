<?php
    require_once('landing_header.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/landing_aboutmedicine.css">
    <script src="https://kit.fontawesome.com/2816eb5ad3.js" crossorigin="anonymous"></script>
    <title> about medicine </title>
    <link rel="icon" href="assets/omniphar.png">
</head>
<body>
    <?php
        $mid = $_GET['mid'];
        $query="SELECT * from item where med_Id = $mid";
        $result= mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($result);

        $query2 = "SELECT * from dosage where med_id = $mid";
        $result2= mysqli_query($conn,$query2);

        $query3 = "SELECT * from dosage where med_id = $mid LIMIT 1";
        $result3= mysqli_query($conn,$query3);
        $row3 = mysqli_fetch_assoc($result3);
    ?>
    <div class="content">
        <table>
            <tr> 
                <td> 
                    <div class="divimg">
                        <img src="<?php echo $row['image']?>" class="medimg">
                    </div> 
                </td>
                <td>
                    <div class="description">
                        <h2><?php echo $row['name']?></h2>
                        <h5> Brand: <?php echo $row['brand']?></h5>
                        <h4> Availability: <span class="avbl"> In Stock </span></h4>
                        <div class="div_selection">

                            <?php
                            while($row2 = mysqli_fetch_assoc($result2))
                            {
                                
                            ?>

                            <?php $r2_dose = $row2['dose']?>
                            <form action="" method="POST" class="dose_form">
                            <input type="text" name="dose" value="<?php echo $r2_dose; ?>" hidden>
                            <button class="selectionbtn" name="selected_dose" type="submit"><?php echo $r2_dose; ?>mg</button>
                            </form>
                            <?php

                                }
                            ?>
                        </div>
                        <?php
                        if(isset($_POST['selected_dose']))
                        {   
                            $final_dose = $_POST['dose'];
    
                        }else{
                            $final_dose = $row3['dose'];

                        }
                        $query4 = "SELECT * from dosage where med_id = $mid AND dose = $final_dose";
                        $result4= mysqli_query($conn,$query4);
                        $row4 = mysqli_fetch_assoc($result4);
                        ?>

                        <p> <?php echo $row['description'];?></p>
                        <!-- price of selected dose is here -->
                        <h3> LKR <span id="dose_price"></span> per all <?php echo $row['per']?></h3>
                    </div>
                </td>
                <td class="lasttd">
                
                    <div class="count">
                        <button onclick="decrement()" class="btn" type="submit" > <b> - </b> </button>
                        <!-- quantity dislays here -->
                        <b id="root"></b>
                        <button onclick="increment()" class="btn" type="submit"> <b> + </b> </button>
                    </div>
                    <div class="btncart">

                    <!-- form that add details to the cart -->
                    <form action="../login.php" method="POST">
                        <div class="cart_form" hidden>
                        <input type="text" name="mid" id="mid" value="<?php echo $mid;?>">
                        <input type="text" name="qnt" id="qnt" value="">
                        <input type="text" name="dosage" id="dosage" value="<?php echo $final_dose;?>">
                        <input type="text" name="category" id="category" value="Medicine">
                        <input type="text" name="l_price" id="l_price" value="">
                        </div>
                        <a href="../login.php"><button class="btn1" type="submit" name="cart_btn"> <b>Add to Cart </b> </button></a> </br>
                        <a href="../login.php"><button class="btn2" type="submit" name="buy_btn"> <b>Buy Now </b> </button></a>
                    </form>
                    </div>
                </td>
            </tr>
        </table>
    </div>


    <script>
        var data=1;
        var last_price;
        var price = <?php echo $row4['price']?>;
        document.getElementById("root").innerText=data;
        document.getElementById("qnt").value=data;
        document.getElementById("dose_price").innerText=price;
        document.getElementById("l_price").value=price;
        function decrement() {
            if (data > 1) {
                data= data-1;
                last_price = price * data;
                document.getElementById("dose_price").innerText=last_price;
                document.getElementById("l_price").value=last_price;
            }
            document.getElementById("root").innerText=data;
            document.getElementById("qnt").value=data;
        }

        function increment() {
                data= data+1;
                document.getElementById("root").innerText=data;
                document.getElementById("qnt").value=data;
                last_price = price * data;
                document.getElementById("dose_price").innerText=last_price;
                document.getElementById("l_price").value=last_price;
        }

    </script>
</body>
</html>
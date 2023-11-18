<?php
    require_once('headerforall.php'); 
    require_once('navbar.php');
    // require_once('pro_cart.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/aboutmedicine.css">
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
        $reorder = $row['reorder'];
        $quantity = $row['quantity'];
        if($reorder >= $quantity){
            $availability = 'Out of stock';
        }else{
            $availability = 'In stock';
        }

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
                        <h4> Availability: <span class="avbl"> <?php echo $availability; ?> </span></h4>
                        <h4> LKR: <?php echo $row['price']?> per <?php echo $row['per']?></h4>
                        

                        <p> <?php echo $row['description'];?></p>
                        <!-- price of selected dose is here -->
                        <h3> Total: LKR <span id="dose_price"></span></h3>
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
                    <form action="pro_cart.php" method="POST">
                        <div class="cart_form" hidden>
                        <input type="text" name="mid" id="mid" value="<?php echo $mid;?>">
                        <input type="text" name="qnt" id="qnt" value="">
                        <input type="text" name="category" id="category" value="<?php echo $row['category'];?>">
                        <input type="text" name="l_price" id="l_price" value="">
                        </div>
                        <button class="btn1" type="submit" name="cart_btn"> <b>Add to Cart </b> </button> </br>
                        <button class="btn2" type="submit" name="buy_btn"> <b>Buy Now </b> </button>
                    </form>
                    </div>
                </td>
            </tr>
        </table>
    </div>


    <script>
        var data=1;
        var last_price;
        var price = <?php echo $row['price']?>;
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
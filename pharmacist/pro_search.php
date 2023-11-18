<?php 
    require_once "dbconn.php";
    require_once "header.php";
    require_once "headerforall.php";
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/home.css">
    </head>
    <body>

    
   <?php 

     if(isset($_POST['submit'])) {
        $search = $_POST['search'];

            $query = "SELECT * FROM medicine WHERE name LIKE'%{$search}%' OR brand LIKE '%{$search}% '" ;
            $result = mysqli_query($conn, $query); 
                if($result) 
                {
                       while($row=mysqli_fetch_assoc($result))
                       {
                        ?>
                         
                            <div class="product">
                            <div class="image">
                                <a href="aboutmedicine.php?mid=<?php echo $row['med_Id']; ?>"> <?php echo '<img src = "data:image;base64,'.base64_encode($row['image']).'">'?> </a>
                            </div>
                            <div class="namePrice">
                                <h3> <?php echo $row['name']; ?> </h3>
                                <h4> <?php echo $row['price']; ?> </h4>
                            </div>
                            <div class="cartbtn1">
                                <button > Add to Cart </button>
                            </div>
                            <div class="cartbtn2">
                                <a href="checkout.php"><button > Buy now</button> </a>
                            </div>
                            </div>
                          <?php
                       }
                        } else {
                            echo "0 results";
                            }
                }    
 ?>

            </body>
            </html>
  
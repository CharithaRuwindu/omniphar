<?php
    require_once('header.php'); 
    require_once('navbar.php'); 
   
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
    <div class="div_upper"></div>
    <div class="content">
        <div class="products">
        <?php
        $sub_category = $_GET['sub_category'];

       $query2 ="SELECT * FROM item WHERE sub_category='$sub_category'" ;
       $result2 = mysqli_query($conn, $query2); 
           if($result2) 
           {
                  while($row2=mysqli_fetch_assoc($result2))
                  {
                   ?>
                    
                       <div class="product">
                       <div class="image">
                          <a href="aboutmedicine.php?mid=<?php echo $row2['med_Id']; ?>"> <img src="<?php echo $row2['image']?>" alt=""> </a>
                       </div>
                       <div class="namePrice">
                           <h3> <?php echo $row2['name']; ?> </h3>
                           <h4> <?php echo $row2['price']; ?> </h4>
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
                   
                
            } else 
                {
                    echo "no results";
                }
            ?>

             

        </div>
    </div>
</body>
</html>
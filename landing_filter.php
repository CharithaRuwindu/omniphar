<?php
    require_once('landing_header.php'); 
   
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

        $query3 ="SELECT * FROM medicine WHERE sub_category='$sub_category'" ;
        $result3 = mysqli_query($conn, $query3); 
           if($result3) 
           {
                  while($row3=mysqli_fetch_assoc($result3))
                  {
                   ?>
                    
                       <div class="product">
                       <div class="image">
                           <a href="aboutmedicine.php?mid=<?php echo $row3['med_Id']; ?>"> <?php echo '<img src = "data:image;base64,'.base64_encode($row3['image']).'">'?> </a>
                       </div>
                       <div class="namePrice">
                           <h3> <?php echo $row3['name']; ?> </h3>
                           <h4> <?php echo $row3['price']; ?> </h4>
                       </div>
                       <div class="cartbtn1">
                           <button > Add to Cart </button>
                       </div>
                       <div class="cartbtn2">
                           <a href="login.php"><button > Buy now</button> </a>
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
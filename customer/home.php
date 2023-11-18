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
    <link rel="stylesheet" href="../css/customer/home.css">
</head>
<body>
    <div class="div_upper"></div>
    <div class="content">
        <div class="products">
        <?php 
// search results shown here
if(isset($_POST['submit'])) {
   $search = $_POST['search'];

//    display search results according to input

       $query2 =( "SELECT * FROM item WHERE name LIKE'%{$search}%' or brand LIKE '%{$search}%'" );
       $result2 = mysqli_query($conn, $query2); 
           if($result2) 
           {
                  while($row2=mysqli_fetch_assoc($result2))
                  {
                        $med_id = $row2['med_Id'];
                        if($row2['category']=='Medicine'){
                        $sql = "SELECT * from dosage where med_id = '$med_id' LIMIT 1";
                        $outcome = mysqli_query($conn, $sql);
                        $line = mysqli_fetch_assoc($outcome);
                        
                   ?>
                    
                       <div class="product">
                       <div class="image">
                           <a href="aboutmedicine.php?mid=<?php echo $row2['med_Id']; ?>"><img src="<?php echo $row2['image'];?>" alt="imge"></a>
                       </div>
                       <div class="namePrice">
                           <h3> <?php echo $row2['name']; ?> </h3>
                           <h4> <?php echo $line['price']; ?> </h4>
                       </div>
                       <div class="cartbtn1">
                           <button > Add to Cart </button>
                       </div>
                       <div class="cartbtn2">
                           <a href="checkout.php"><button > Buy now</button> </a>
                       </div>
                       </div>
                     <?php

                    //  if not a medicine searched
                    
                        }else{ ?>
                            <div class="product">
                       <div class="image">
                           <a href="aboutmedicine.php?mid=<?php echo $row2['med_Id']; ?>"><img src="<?php echo $row2['image'];?>" alt="imge"></a>
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
                       <?php }

                        
                  }
                   } else {
                       echo "0 results";
                       }
           } 

// if not searched or filtered
           else{   
?>

            <?php
                $query="SELECT * from item";
                $result= mysqli_query($conn,$query);
                while($row = mysqli_fetch_assoc($result))
                {
                    if($row['category']=='Medicine'){

                        // showing the first result of doses
                        
                        $med_id = $row['med_Id'];
                        $sql = "SELECT * from dosage where med_id = '$med_id' LIMIT 1";
                        $outcome = mysqli_query($conn, $sql);
                        $line = mysqli_fetch_assoc($outcome);

                        // calculate stock availability

                        $reorder = $row['reorder'];
                        $availability ='Out of stock';

                        $sql2 = "SELECT * from dosage where med_id = '$med_id'";
                        $outcome2 = mysqli_query($conn, $sql2);
                        while($line2 = mysqli_fetch_assoc($outcome2)){
                            $quantity= $line2['quantity'];

                            if($reorder <= $quantity){
                                $availability ='In Stock';
                            }
                        }
                    }

    // if the item is not medicine, tht means wellness, personal care, devices or others
                    else{
                        $reorder = $row['reorder'];
                        $quantity= $row['quantity'];
                        if($reorder <= $quantity){
                            $availability ='In Stock';
                        }
                        else{
                            $availability ='Out of Stock';
                        }
                    }


            ?>

            <div class="product">

            <!-- instock or outofstock -->

                <?php
                if($availability=='In Stock')
                {
                ?>

                <p class="instock"><b><?php echo $availability;?></b></p>

                <?php
                }else{
                ?>

                <p class="outofstock"><b><?php echo $availability;?></b></p>
                
                <?php
                }
                ?>
                
                <div class="image">
                    <?php if($row['category']=='Medicine'){ ?><a href="aboutmedicine.php?mid=<?php echo $row['med_Id']; ?>"> <img src="<?php echo $row['image'];?>" alt="imge"> </a>
                    <?php }else{ ?> <a href="aboutitem.php?mid=<?php echo $row['med_Id']; ?>"> <img src="<?php echo $row['image'];?>" alt="imge"> </a> <?php } ?>
                </div>
                <div class="namePrice">
                    <h3> <?php echo $row['name']; ?> </h3>
                    <h4> 
                    <?php if($row['category']=='Medicine'){ echo "Rs."; echo $line['price']; }else{echo "Rs."; echo $row['price'];} ?> </h4>
                </div>
                <div class="cartbtn1">
                    <button > Add to Cart </button>
                </div>
                <div class="cartbtn2">
                    <?php if($row['category']=='Medicine'){ ?>
                    <a href="aboutmedicine.php?mid=<?php echo $row['med_Id']; ?>"><button > Buy now</button></a>
                    <?php }else{ ?>
                    <a href="aboutitem.php?mid=<?php echo $row['med_Id']; ?>"><button > Buy now</button></a>
                    <?php } ?>
                </div>

                <!-- per and dose -->
                <p class="footnote">per <?php echo $row['per'];?>
                <?php
                if($row['category']=='Medicine'){ echo $line['dose']; echo " mg";
                }?></p>
            </div>

            <?php
                    }
                }
            ?>   

        </div>
    </div>
</body>
</html>
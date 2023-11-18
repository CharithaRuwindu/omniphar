<?php
    require_once('dbconn.php');
    require_once('headerforall.php'); 
    require_once('navbar.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/vieworderdetails.css">
    <script src="https://kit.fontawesome.com/2816eb5ad3.js" crossorigin="anonymous"></script>
    <title>New try</title>
    <link rel="icon" href="assets/omniphar.png">
</head>
<body>
    <?php
    $oid = $_GET['oid'];
    $query="SELECT * from order_items WHERE order_id = '$oid'";
    $result= mysqli_query($conn,$query);

    $query2="SELECT * from orders WHERE id = '$oid'";
    $result2= mysqli_query($conn,$query2);
    $row2 = mysqli_fetch_assoc($result2);
    ?>
    <div class="content">

        <h2> Order Details </h2>
        <table class="detailstable">
            <tr>
                 <td> <h3> Order ID : <?php echo $oid ?></h3> </td>
                 
            </tr>
            <tr> 
                <td> Ordered date : <?php echo $row2['order_date'] ?> </td>
                
            </tr>
            <tr> 
                <td> Price : LKR. <?php echo $row2['price'] ?> </td>
            </tr>
            <?php
            if($row2['status']=='completed')
            {
            ?>
            <tr> 
                <td> Completed date : <?php echo $row2['status'] ?> </td>
            </tr>
            <?php
            }
            ?>
        </table>

        <?php
        // delivery information
        // only shown if order need to deliver

            if($row2['prefer']=='deliver' && $row2['status']!='processing' && $row2['status']!='canceled')
            {
                $query4 = "SELECT * from user where id ='". $row2['delivery_person_id'] ."'";
                $result4 = mysqli_query($conn, $query4);
                $row4 = mysqli_fetch_assoc($result4);
        ?>

        <table class="deliverytable">
            <tr>
                 <td> <h3> Delivery person : <?php echo $row4['firstname']; ?> <?php echo $row4['lastname']; ?></h3> </td>
                 
            </tr>
            <tr> 
                <td> Contact No : <?php echo $row4['contact'] ?> </td>
                
            </tr>
        </table>
            <?php
            }
            ?>
        <div class="meddetails">
        <?php
            while($row = mysqli_fetch_assoc($result))
            {
                $item_id = $row['item_id'];
                $query3 = "SELECT * from item WHERE med_Id = '$item_id'";
                $result3= mysqli_query($conn,$query3);
                $row3 = mysqli_fetch_assoc($result3);
            ?>

            <!-- order items details -->
            <table class="colortable">
                <tr> 
                    <td> <b> Item </b></td> 
                    <td> <b> Name </b></td>
                    <td> <b> Quantity  </b></td>
                </tr>
                <tr> 
                    <td > <img src="<?php echo $row3['image']?>" class="medimg"> </td>
                    <td> <?php echo $row3['name']?>  </td>
                    <td> <?php echo $row['quantity']?> </td>
                </tr>
            </table>

            <?php
            }
            ?>
        </div>
        <div class="btn_table">
            <table class="double_btn">
                <tr> 
                    <td> <button class="re-order" type="submit" >  <b> Reorder</b> </button> </td>

                    <?php
                    if($row2['status']=='processing'){
                        ?>

                    <td> <button class="cancel_order" name="c_order" type="submit" >  <b> Cancel order </b> </button> </td>

                    <?php
                    }
                    ?>
                    <?php 
                    if($row2['status']=='delivered' || $row2['status']=='completed'){
                    $query5="SELECT * from feedback WHERE order_ID = '$oid'";
                    $result5= mysqli_query($conn,$query5); 
                    
                    if(mysqli_num_rows($result5) > '0') {
                        echo 
                        '<td> <button class="btnfeedback" type="submit"name="feedbackbtn"> <a href="pro_rate_view.php?oid='. $oid .'" class="afeedback">  <b> Feedback </b> </a> </button></td> ';
                    }else{
                        echo
                        '<td> <button class="btnfeedback" type="submit"name="feedbackbtn"> <a href="rate.php?oid='.$oid.'" class="afeedback">  <b> Feedback </b> </a> </button></td> ';
                    }
                }

                    ?>
                </tr>
            </table>
        </div>
        
    </div>
</body>
</html>
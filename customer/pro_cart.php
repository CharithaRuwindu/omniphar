<?php
require_once('dbconn.php');
session_start();

if(isset($_POST['cart_btn'])){

    $user_id = $_SESSION['uid'];
    $medicine_id = $_POST['mid'];
    $category = $_POST['category'];
    $dosage = $_POST['dosage'];
    $quantity = $_POST['qnt'];
    $price = $_POST['l_price'];

    if($category = 'medicine'){

    $query = "SELECT * from cart where uid='$user_id' AND med_id='$medicine_id' AND dosage='$dosage'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)>0){
        $db_quantity = $row['quantity'];
        $db_price = $row['price'];

        $quantity+=$db_quantity;
        $price+=$db_price;

        $query3 = "UPDATE cart SET quantity = '$quantity', price = '$price' WHERE uid='$user_id' AND med_id='$medicine_id' AND dosage='$dosage'";
        $result3 = mysqli_query($conn,$query3);
        header("location:viewcart.php");

    }
    else{
        $query2 = "INSERT INTO cart(uid, med_id, category, quantity, price, dosage)VALUES('$user_id','$medicine_id','$category','$quantity','$price','$dosage')";
        $result2 = mysqli_query($conn,$query2);
        header("location:viewcart.php");
    }

    }else{

        $query = "SELECT * from cart where uid='$user_id' AND med_id='$medicine_id'";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($result);

        if(mysqli_num_rows($result)>0){

        $db_quantity = $row['quantity'];
        $db_price = $row['price'];

        $quantity+=$db_quantity;
        $price+=$db_price;

        $query3 = "UPDATE cart SET quantity = '$quantity', price = '$price' WHERE uid='$user_id' AND med_id='$medicine_id'";
        $result3 = mysqli_query($conn,$query3);
        header("location:viewcart.php");

    }
    else{
        $query2 = "INSERT INTO cart(uid, med_id, category, quantity, price)VALUES('$user_id','$medicine_id','$category','$quantity','$price')";
        $result2 = mysqli_query($conn,$query2);
        header("location:viewcart.php");
    }

    }
}
?>
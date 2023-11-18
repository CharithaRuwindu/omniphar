<?php
    require_once('dbconn.php');

    if(isset($_POST['med_sub'])){

    $name = $_POST['name'];
    $brand = $_POST['brand'];
    $price = $_POST['price'];
    $per = $_POST['per'];
    $quantity = $_POST['quantity'];
    $reorder = $_POST['reorder'];
    $myfile = $_POST['myfile'];
    $category = $_POST['category'];
    $description = $_POST['description'];

    $query = "INSERT INTO medicine(name, brand, price, quantity, reorder, category, description)VALUES('$name','$brand','$price','$quantity','$reorder', '$category', '$description')";
    $result = mysqli_query($conn, $query);

    // if($result){
    //     header("location : add_new_medicine.php");
    // }
    // else{
    //     echo "unsuccessful";
    // }

    // $stmt = $conn->prepare("insert into medicine(name,brand,price,per,quantity,reorder,category,description)
    // values(?,?,?,?,?,?,?,?)");
    // $stmt->bind_param("ssssssss",$name,$brand,$price,$per,$quantity,$reorder,$category,$description);
    // $stmt ->execute();
    // header("location:add_new_medicine.php");
    // $stmt->close();
    }
?>
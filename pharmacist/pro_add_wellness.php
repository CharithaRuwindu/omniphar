<?php
require_once('dbconn.php');

if (isset($_POST['submit'])){

    $name = $_POST['name'];
    $brand = $_POST['brand'];
    $price = $_POST['price'];
    $per = $_POST['per'];
    $reorder = $_POST['reorder'];
    $quantity = $_POST['quantity'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $myfile = $_FILES['myfile'];

    if(empty($name) || empty($brand)|| empty($price)|| empty($per)|| empty($quantity)|| empty($category)|| empty($reorder)|| empty($description) || empty($myfile)){
        echo "fill all the details";
    }
    else{
        $directory = "../assets/";
                
                    $images   = $_FILES["myfile"]["name"];
                    $size_check = getimagesize($_FILES["myfile"]["tmp_name"]);
                    $img_type  = strtolower(pathinfo($_FILES["myfile"]["name"],PATHINFO_EXTENSION));
                    $path  = $directory.basename($images);
                
                    if($size_check !== false){
                        if($_FILES["myfile"]["size"] < 50000000){
                            if($img_type == 'jpg' || $img_type == 'jpeg' || $img_type == 'png'){
                                $output = move_uploaded_file($_FILES["myfile"]["tmp_name"],$path);
                                if($output){
                                $query = "INSERT INTO item(name, brand, category, sub_category, price, per, description, image, reorder, quantity)VALUES('$name','$brand','Wellness','$category','$price','$per','$description','$path','$reorder', '$quantity')";
                                $result = mysqli_query($conn, $query);
                                }
                                else{
                                    echo "error occured";
                                }
                            }
                            echo "invalid format, try jpg, jpeg or png";
                        }
                        echo "file size too big";
                    }
    }



    
    }



?>
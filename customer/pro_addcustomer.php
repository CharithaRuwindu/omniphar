<?php
require_once('dbconn.php');

$err = "";

if(isset($_POST['sub_btn'])){

    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $address = $_POST['address'];
    $cnumber = $_POST['cnumber'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check1 = "SELECT * from customer where email='$email'";
    $confirm1 = mysqli_query($conn,$check1);

    $check2 = "SELECT * from customer where contact='$cnumber'";
    $confirm2 = mysqli_query($conn,$check2);

    if($row1 = mysqli_fetch_assoc($confirm1)){
        $cmail = $row1['email'];
        if($cmail == $email){
            $err = "This is an already registered user";
        }
    }
    elseif($row2 = mysqli_fetch_assoc($confirm2)){
        $ccontact = $row2['contact'];
        if($ccontact == $cnumber){
            $err = "This is an already registered user";
        }
    }
    else{
        $query = "INSERT INTO customer(email, first_name, last_name, password, address, contact ) VALUES('$email','$firstname','$lastname','$password','$address','$cnumber')";
        $result = mysqli_query($conn, $query);

        if($result){
            header("location:customerlist.php");
        }
        else{
            $err = "Error occured";
        }
    }
}

?>
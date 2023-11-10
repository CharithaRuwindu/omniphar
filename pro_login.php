<?php
session_start();
require_once('dbconn.php');

$err = "";
$suc = "";
    if (isset($_POST['login_btn'])){
    
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];

    if(empty($mail) || empty($pass)){
        echo '<script>alert("Please fill the required fields")</script>';
    }
    else{
        $query = "SELECT * from user where Email='$mail'";
        $result = mysqli_query($conn,$query);

        if($row = mysqli_fetch_assoc($result)){

            $password = $row['password'];

            if($pass == $password){

                $role = $row['role'];
                $_SESSION['firstname'] = $row['firstname'];
                $_SESSION['uid'] = $row['id'];
                $_SESSION['photo'] = $row['photo'];
                if($role === "admin"){
                // $suc = "Login Successful";
                header("location:admin/dashboard.php");
                // echo '<script>alert("error occured")</script>';
                }
                elseif($role === "pharmacist"){
                    header("location:pharmacist/med_list.php");
                }
                elseif($role === "delivery_person"){
                    header("location:delivery_person/packed.php");
                    
                }
                else{
                    header("location:customer/home.php");
                }
            }
            else{
                echo '<script>alert("Invalid login details")</script>';
            }
        }
        else{
            echo '<script>alert("Invalid login details")</script>';
        }
    }
}
?>
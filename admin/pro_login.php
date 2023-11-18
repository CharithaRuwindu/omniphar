<?php
session_start();
require_once('dbconn.php');

$err = "";
$suc = "";
    if (isset($_POST['login_btn'])){
    
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];

    if(empty($mail) || empty($pass)){
        $err = "Please fill the required details";
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
                header("location:dashboard.php");
                // echo '<script>alert("error occured")</script>';
                }
                elseif($role === "pharmacist"){
                    header("location:pharmacist/med_tbl.php");
                }
                elseif($role === "delivery_person"){
                    header("location:new.php");
                }
                else{
                    header("location:redesign/home.php");
                }
            }
            else{
                $err = "Invalid Login Details";
            }
        }
        else{
            $err = "Invalid Login Details";
        }
    }
}
?>
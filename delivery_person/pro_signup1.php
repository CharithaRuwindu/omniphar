<?php
require_once('dbconn.php');

$err = "";
$suc = "";

if (isset($_POST['signup_btn'])){

    $role = $_POST['role'];
    $mail = $_POST['mail'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $nic = $_POST['nic'];

    $check1 = "SELECT * from user where email='$mail'";
    $confirm1 = mysqli_query($conn,$check1);
    
    if($row = mysqli_fetch_assoc($confirm1)){
        $email = $row['email'];
        if($email == $mail){
            $err = "Already Registered user";
        }
    }
    else{
        if($pass1==$pass2){
            

                $check2 = "SELECT * from user where nic='$nic'";
                $confirm2 = mysqli_query($conn,$check2);

                $check3 = "SELECT * from user where contact='$contact'";
                $confirm3 = mysqli_query($conn,$check3);

                if($row2 = mysqli_fetch_assoc($confirm2)){
                    $nat_id = $row2['nic'];
                    if($nat_id == $nic){
                        $err = "Already Registered user";
                    }
                }
                elseif($row3 = mysqli_fetch_assoc($confirm3)){
                    $phone = $row3['contact'];
                    if($phone == $contact){
                        $err = "Already registered user";
                    }
                }else{
                    $query = "INSERT INTO user(email, password, address, contact, firstname, lastname, nic, role)VALUES('$mail','$pass1','$address','$contact','$fname','$lname','$nic','$role')";
                    $result = mysqli_query($conn, $query);

                    if($result){
                        header("location:login.php");
                    }
                    else{
                        $err = "Error occured";
                    }
                    }
            }
        
            else{
                $err = "Passwords do not match";
            }


    }

}
?>
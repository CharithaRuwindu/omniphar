<?php
require_once('dbconn.php');

$err = "";
$suc = "";

if (isset($_POST['reg_btn'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    
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
            

                $check3 = "SELECT * from user where contact='$contact'";
                $confirm3 = mysqli_query($conn,$check3);

                if($row3 = mysqli_fetch_assoc($confirm3)){
                    $phone = $row3['contact'];
                    if($phone == $contact){
                        $err = "Already registered user";
                    }
                }else{
                    $role = "pharmacist";
                    $query = "INSERT INTO user(email, password, firstname, lastname, address, contact, role)VALUES('$mail', '$pass1','$fname','$lname','$address','$contact','$role')";
                    $result = mysqli_query($conn, $query);


                    if($result){
                        header("location:pharmacists.php");
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
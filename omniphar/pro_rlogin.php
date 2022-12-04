<?php
require_once('dbconn.php');
    if (isset($_POST['login_btn'])){
    
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];

    if(empty($mail) || empty($pass)){
        echo 'Please fill the required fields';
    }
    else{
        $query = "SELECT * from delivery_person where Email='$mail'";
        $result = mysqli_query($conn,$query);

        if($row = mysqli_fetch_assoc($result)){

            $password = $row['password'];

            if($pass == $password){
                header("location:sidebar.php");
            }
            else{
                echo 'Incorrect Password';
            }
        }
        else{
            echo 'Incorrect Email';
        }
    }

}


?>
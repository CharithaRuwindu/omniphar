<?php
require_once('dbconn.php');
    if (isset($_POST['login'])){
    
    $Email = $_POST['username'];
    $Password = $_POST['password'];

    if(empty($Email) || empty($Password)){
        echo 'Please fill the required fields';
    }
    else{
        $query = "SELECT * from customers where Email='$Email'";
        $result = mysqli_query($conn,$query);

        if($row = mysqli_fetch_assoc($result)){

            $Password = $row['password'];

            if($Password == $password){
                header("location:med_tbl.php");
            }
            else{
                echo 'Incorrect Password';
            }
        }
        else{
            echo 'Incorrect username';
        }
    }

}


?>
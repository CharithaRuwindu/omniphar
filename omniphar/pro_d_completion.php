<?php
require_once('dbconn.php');

if(isset($_POST['sub_btn'])){
    $oid = $_POST['oid'];
    $cdate = $_POST['cdate'];
    $ctime = $_POST['ctime'];

    if(empty($oid)){
        echo 'Please insert Order ID';
    }
    elseif(empty($cdate)){
        echo 'Please insert delivered date';
    }
    elseif(empty($ctime)){
        echo 'Please insert delivered time';
    }
    else{
        $check = "SELECT * from delivery_completion where ID='$oid'";
        $confirm = mysqli_query($conn,$check);

        if($row = mysqli_fetch_assoc($confirm)){
            $ID = $row['ID'];
            if($ID == $oid){
                echo 'This Order ID is an already completed order';
            }
        }
        else{
            $query = "INSERT INTO delivery_completion(ID, Date, Time ) VALUES('$oid','$cdate','$ctime')";
            $result = mysqli_query($conn, $query);

            if($result){
                echo 'successfully recorded';
            }
            else{
                echo 'error occurred';
            }
        }
    }
}
?>
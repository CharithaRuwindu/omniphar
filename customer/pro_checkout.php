<?php
require_once('dbconn.php');
require_once('../pro_login.php');
date_default_timezone_set('Asia/Kolkata');

$uid = $_SESSION['uid'];
$date = date('Y-m-d');
$time = date('H:i:s');

if(isset($_POST['sub_btn'])) {

        $prefer = $_POST['choice'];
        $total_sum = $_POST['total_sum'];
        if($prefer=='onsite'){
            $sql = "INSERT INTO orders (prefer, customer_id, status, order_date, order_time, price) VALUES ('$prefer', '$uid','processing', '$date', '$time', '$total_sum')";
            $result = mysqli_query($conn, $sql);
        }
        else{
            $address = $_POST['address'];
            $sql = "INSERT INTO orders (prefer, address, customer_id, status, order_date, order_time, price) VALUES ('$prefer', '$address', '$uid','processing', '$date', '$time', '$total_sum')";
            $result = mysqli_query($conn, $sql);
        }
        $query2 = "SELECT * from orders where customer_id = '$uid' AND order_date = '$date' AND order_time = '$time'";
        $result2= mysqli_query($conn, $query2);
        $row2 = mysqli_fetch_assoc($result2);
            
        foreach($_POST['checkbox'] as $checked) {
                $query3 = "SELECT * from cart WHERE id = '$checked'";
                $result3 = mysqli_query($conn, $query3);

                while($row3 = mysqli_fetch_assoc($result3)){
                    $query4 = "INSERT INTO order_items (order_id, item_id, dosage, quantity, price) VALUES ('".$row2['id']."', '".$row3['med_id']."', '".$row3['dosage']."', '".$row3['quantity']."', '".$row3['price']."')";
                    $result4 = mysqli_query($conn, $query4);

                    if($result){
                        echo '<script>alert("Order successful");</script>';
                        echo '<script>';
                        echo 'setTimeout(function(){ window.location.href = "myorders.php"; }, 500);';
                        echo '</script>';
                    }
                    else{
                        echo "no";
                    }
                }
        }
    
 }
 else{
    echo "no button";
 }
?> 





<?php
    require_once('dbconn.php');

    $query="select rate from rating where id='8'";
    $result= mysqli_query($conn,$query);
    $row1 = mysqli_fetch_assoc($result);

    $rate = $row1['rate'];


    for($i = 1; $i <= 5; $i++){
        if($i <= $rate){
            echo '<i class="fa fa-star checked"></i>';
        }else{
            echo '<i class="fa fa-star"></i>';
        }
    }
    
    ?>

<html>
<head>
<!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.checked {
  color: orange;
}
</head>
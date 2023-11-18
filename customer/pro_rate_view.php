<?php 
    require_once('dbconn.php');
    require_once('headerforall.php'); 
    require_once('navbar.php');
    
    $oid = $_GET['oid'];

    $query="SELECT * from feedback WHERE order_ID = '$oid'" ;
    $result= mysqli_query($conn,$query);

    if($row = mysqli_fetch_assoc($result));
{
    $rate_ph= $row['pRate'];
    $pharmacyComment = $row['pComment'];
    $rate_deli= $row['dRate'];
    $pharmacyComment = $row['dComment'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2816eb5ad3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/rate_view.css">
    <title> rate page</title>
    <link rel="icon" href="assets/omniphar.png">
    <style>
.checked {
  color: orange;
}

</style>
</head>
<body>
    <div class="content">
        <table class="review">
            <tr> 
                <td > <b> Your valueable comment for our service </b></td>
                
                <td >  <b>Your valueable comment for our delivery person </b> </td>
            
            </tr>
            <tr>
                <td class="stars">   <?php  for($i = 1; $i <= 5; $i++){
                            if($i <= $rate_ph){
                            echo '<i class="fa fa-star checked"></i>';
                            }else{
                            echo '<i class="fa fa-star"></i>';
                            }
                        } ?> 
                </td>
                

                <td class="stars">   <?php    for($j = 1; $j <= 5; $j++){
                            if($j <= $rate_deli){
                            echo '<i class="fa fa-star checked"></i>';
                            }else{
                            echo '<i class="fa fa-star"></i>';
                            }
                        } ?>
                </td>
                
            </tr>
            <tr>
                <td> <?php echo $row['pComment']; ?> </td>
                <td> <?php echo $row['dComment']; ?> </td>
            </tr>
        </table>
    </div>
</body>
</html>

<?php
}
?>



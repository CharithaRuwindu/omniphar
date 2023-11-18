<?php
    require_once('headerforall.php'); 
    require_once('navbar.php');
    require_once('dbconn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ominiphar</title>
    <link rel="stylesheet" href="css/cart_try.css" />
    <script src="https://kit.fontawesome.com/2816eb5ad3.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>
</head>
<body>
    <div class="div_upper"></div>
    <div class="content">
        
    <?php
    $sql = "select * from cart where uid = '3'";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result))
    {
    ?>

    <input type="checkbox" id="checkbox2" name="checkbox2" value="<?php echo $row['id'];?>">
    <p><?php echo $row['price'];?></p>

    <?php
    }
    ?>
    </div>
  
</body>
</html>

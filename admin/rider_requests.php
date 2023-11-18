<?php
    require_once('header-1.php');
    require_once('navbar.php');
    require_once('dbconn.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/rider_requests.css">
    <script src="https://kit.fontawesome.com/2816eb5ad3.js" crossorigin="anonymous"></script>
    <title> customersupport page</title>
    <link rel="icon" href="assets/omniphar.png">
</head>
<body>
    <div class="content">
        <div class="div_upper"></div>
        <div class="div_chat">
        <a href="chatwithpharmacy.php">
            <table class="chattble">  
                <tr> 
                    <td> <img src="assets/omniphar.png" class="chatimg"> </td>
                    <td> Delivery Person Requests</td>
                </tr>
            </table> </a>
        </div>

        <!-- anotherline -->
        <div class="div_chat">
        <table class="chattble">
                    
                    <?php
                    $query="SELECT * from delivery_person_requests";
                    $result= mysqli_query($conn,$query);
                    
                        while($row = mysqli_fetch_assoc($result))
                        {
                            $rid=$row['id'];
                    ?>
                    <tr>
                        
                            <td> <img src="<?php echo $row['photo']?>" class="chatimg"></td>
                            <td> <a href="rider_req_profile.php?rid=<?php echo $row['id'];?>"><?php echo $row['first_name']; ?><?php echo $row['last_name']; ?></a></td>
                            <td> <button class="circlebtn"></button></td>
                        
                </tr>
                    <?php
                    }
                ?>
                </table>


        </div>
    </div>
</body>
</html>
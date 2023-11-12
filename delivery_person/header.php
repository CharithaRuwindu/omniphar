<?php
    session_start();
    require_once('dbconn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/delivery_person/header.css">
    <script src="https://kit.fontawesome.com/2816eb5ad3.js" crossorigin="anonymous"></script>
    <title>OMNIphar</title>
    <link rel="icon" href="assets/omniphar.png">
</head>
<body>

    <!--topbar-->
    <header class="header">
        <div class="top-bar">
            <div class="logo-container">
                <img src="../assets/omniphar.png" alt="logo" class="logo">
            </div>
            <div class="search-container">
                <form action="search.php" method="POST" class="search-form">
                    <input type="text" name="search" placeholder="Search for items" class="search-box">
                    <button type="submit" name="btn" class="lens"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="icon-container">
                <table class="tbl">
                    <tr>
                        <td><i class="fa fa-bell"></i></td>
                        <td id="fname"><p> <b><?php echo $_SESSION['firstname'];?></b></p></td>
                        <td id="profile"><img src="<?php echo $_SESSION['photo'];?>" alt=""></td>
                    </tr>
                </table>
        </div>
    </header>
</body>
</html>


<?php
    require_once('dbconn.php');
    require_once('header-1.php'); 
    require_once('navbar.php');
    $rid=$_GET['rid'];
    $query="select * from delivery_person_requests where id=$rid";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/d_profile.css">
    <script src="https://kit.fontawesome.com/2816eb5ad3.js" crossorigin="anonymous"></script>
    <title> Customer Account </title>
    <link rel="icon" href="assets/omniphar.png">
</head>
<body>
    <div class="content">
        <div class="profile_img"><img src = "<?php echo $row['photo']?>" class="item_img"></div>
        <div class="topic"><h2>Profile Information</h2></div>
        <div class="profile_info">
        <table>
            
            <tr>
                <td class="first"><label>First Name : </label></td>
                <td class="second"><?php echo $row['first_name']; ?></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td><label>Last Name : </label></td>
                <td class="second"><?php echo $row['last_name']; ?></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td><label>Email : </label></td>
                <td class="second"><?php echo $row['email']; ?></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td><label>Address : </label></td>
                <td class="second"><?php echo $row['address']; ?></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td><label>Contact : </label></td>
                <td class="second"><?php echo $row['contact']; ?></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td><label>NIC : </label></td>
                <td class="second"><?php echo $row['NIC']; ?></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td><label>Vehicle Type : </label></td>
                <td class="second"><?php echo $row['vehicle']; ?></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td><label>License plate no: </label></td>
                <td class="second"><?php echo $row['license_plate']; ?></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td><label>License plate image: </label></td>
                <td class="second"><img src="<?php echo $row['plate_img']; ?>" alt="license"></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td><label>License card image: </label></td>
                <td class="second"><img src="<?php echo $row['l_plate_front']; ?>" alt="license"></td>
            </tr>
        </table>
        <button ><a href="rider_request_accept.php?reqid=<?php echo $row['id'];?>" name="click">Accept</a></button>
    </div>
    
    </div>
    
</body>
</html>
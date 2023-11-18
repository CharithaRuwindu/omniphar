<?php
    require_once('dbconn.php');
    require_once('header-1.php'); 
    require_once('navbar.php');
    $rid=$_GET['rid'];
    $query="select * from user where id=$rid";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_assoc($result);

    $query2="select * from delivery_person where d_id=$rid";
    $result2=mysqli_query($conn,$query2);
    $row2=mysqli_fetch_assoc($result2);
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
        <div class="profile_img"> <img src = "<?php echo $row['photo']?>"></div>
        <div class="topic"><h2>Profile Information</h2></div>
        <div class="profile_info">
        <table>
            <tr>
                <td class="first"><label>User ID : </label></td>
                <td class="second"><?php echo $rid; ?></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td><label>First Name : </label></td>
                <td class="second"><?php echo $row['firstname']; ?></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td><label>Last Name : </label></td>
                <td class="second"><?php echo $row['lastname']; ?></td>
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
                <td class="second"><?php echo $row['nic']; ?></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td><label>Vehicle type : </label></td>
                <td class="second"><?php echo $row2['vehicle_type']; ?></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td><label>License plate No : </label></td>
                <td class="second"><?php echo $row2['license_plate']; ?></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td><label>License plate : </label></td>
                <td class="second"><img src="<?php echo $row2['license_p_image']; ?>" alt=""></td>
            </tr>
            <tr>
                <td><label>License : </label></td>
                <td class="second"><img src="<?php echo $row2['License_image_front']; ?>" alt=""><img src="<?php echo $row2['License_image_back']; ?>" alt=""></td>
            </tr>
        </table>
    </div>
    </div>
</body>
</html>
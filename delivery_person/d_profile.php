<?php
    require_once('dbconn.php');
    require_once('header.php'); 
    require_once('navbar.php');
    require_once('pro_d_profile_edit.php');
    $uid = $_SESSION['uid'];
    $query = "SELECT * from user where id='$uid'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/delivery_person/d_profile.css">
    <script src="https://kit.fontawesome.com/2816eb5ad3.js" crossorigin="anonymous"></script>
    <title> Customer Account </title>
    <link rel="icon" href="assets/omniphar.png">
</head>
<body>
    <div class="content">
        <div class="profile_img"> <img src="<?php echo $row['photo'];?>"></div>
        <div class="topic"><h2 >User Profile</h2></div>
        <div class="profile_info">
        <table>
            <tr>
                <td class="first"><label>User ID : </label></td>
                <td class="second"><?php echo $uid; ?></td>
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
            <tr>
                <td class="btnedit"> <button class="ebtn" id="edit_btn" onclick="openpopup()"> Edit Details </button> </td>
            </tr>
        </table>
    </div>
    <div class="edit_div" id="edit_div">
        <form action="" method="post" class="edit_popup" id="edit_popup">
            <input type="text" name="d_id" value="<?php echo $uid; ?>" hidden>
    <table>
            <tr>
                <td><label>First Name : </label></td>
                <td class="second"><input type="text" name="f_name" value="<?php echo $row['firstname']; ?>"></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td><label>Last Name : </label></td>
                <td class="second"><input type="text" name="l_name" value="<?php echo $row['lastname']; ?>"></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td><label>Email : </label></td>
                <td class="second"><?php echo $row['email']; ?></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td><label>Address : </label></td>
                <td class="second"><input type="text" name="address" value="<?php echo $row['address']; ?>"></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td><label>Contact : </label></td>
                <td class="second"><input type="text" name="contact" value="<?php echo $row['contact']; ?>"></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td><label>NIC : </label></td>
                <td class="second"><input type="text" name="nic" value="<?php echo $row['nic']; ?>"></td>
            </tr>
    </table>
    <button class="update_btn" id="cancel" onclick="closepopup()">cancel</button>
    <button class="update_btn" id="save" name="save_btn">save changes</button>
        </form>

    </div>
    </div>
    <script>
        let popup = document.getElementById("edit_div");

        function openpopup(){
            popup.classList.add("open_popup")
        }
        function closepopup() {
                popup.classList.remove("open_popup")
        }

        
    </script>
</body>
</html>
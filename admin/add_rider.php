<?php
require_once('dbconn.php');

$err = "";
$suc = "";

if (isset($_POST['reg_btn'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $nic = $_POST['nic'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $vtype = $_POST['vtype'];
    $photo = $_FILES['pimage'];
    $lno = $_POST['lno'];
    $license_p_image = $_FILES['license_p_image'];
    $dfimage = $_FILES['dfimage'];
    $dbimage = $_FILES['dbimage'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    $role = "delivery_person";

    $check1 = "SELECT * from user where email='$email' OR nic='$nic' OR contact='$contact'";
    $confirm1 = mysqli_query($conn,$check1);
    
    if($row = mysqli_fetch_assoc($confirm1)){
        
            $err = "Already Registered user";

    }
    elseif($pass1!=$pass2){
        $err = "Password not matching";
    }
    elseif(empty($pass1) || empty($pass2)|| empty($email)|| empty($fname)|| empty($lname)|| empty($address)|| empty($contact)|| empty($nic)){

        $err = "Please fill all the fields";

    }
    elseif (strlen($pass1) < 5 || !preg_match("/[A-Z]/", $pass1) || !preg_match("/[a-z]/", $pass1) || !preg_match("/[0-9]/", $pass1)) {

        $err = "Require at least 5 characters, lower and upper case, and numbers";
    }
    elseif (!preg_match("/^[a-zA-Z]+$/", $fname)||!preg_match("/^[a-zA-Z]+$/", $lname)) {
    
        $err = "Only letters are valid in the name";
    }
    else{

        if (preg_match("/^0[0-9]{9}$/", $contact) && ctype_digit($contact)) {
            if (preg_match("/^[0-9]{9}V$/", $nic) || preg_match("/^[0-9]{12}$/", $nic)) {

                    $directory = "../assets/";
                
                    $images   = $_FILES["pimage"]["name"];
                    $size_check = getimagesize($_FILES["pimage"]["tmp_name"]);
                    $img_type  = strtolower(pathinfo($_FILES["pimage"]["name"],PATHINFO_EXTENSION));
                    $path  = $directory.basename($images);
                
                    if($size_check !== false){
                        if($_FILES["pimage"]["size"] < 50000000){
                            if($img_type == 'jpg' || $img_type == 'jpeg' || $img_type == 'png'){
                                $output = move_uploaded_file($_FILES["pimage"]["tmp_name"],$path);
                                if($output){
                                $query = "INSERT INTO user(email, password, address, contact, firstname, lastname, nic, role, photo)VALUES('$email','$pass1','$address','$contact','$fname','$lname','$nic','$role','$path')";
                                $result = mysqli_query($conn, $query);

                                // end of entering basic information
                                // retrieveing ID and entering remaining data to delivery persons table

                                if($result){
                                    $license_p_image   = $_FILES["license_p_image"]["name"];
                                    $size_check = getimagesize($_FILES["license_p_image"]["tmp_name"]);
                                    $img_type  = strtolower(pathinfo($_FILES["license_p_image"]["name"],PATHINFO_EXTENSION));
                                    $path2  = $directory.basename($license_p_image);
                                
                                    if($size_check !== false){
                                        if($_FILES["license_p_image"]["size"] < 50000000){
                                            if($img_type == 'jpg' || $img_type == 'jpeg' || $img_type == 'png'){
                                                $output2 = move_uploaded_file($_FILES["license_p_image"]["tmp_name"],$path2);
                                                if($output2){

                                                    $dfimage   = $_FILES["dfimage"]["name"];
                                                    $size_check = getimagesize($_FILES["dfimage"]["tmp_name"]);
                                                    $img_type  = strtolower(pathinfo($_FILES["dfimage"]["name"],PATHINFO_EXTENSION));
                                                    $path3  = $directory.basename($dfimage);
                                                
                                                    if($size_check !== false){
                                                        if($_FILES["dfimage"]["size"] < 50000000){
                                                            if($img_type == 'jpg' || $img_type == 'jpeg' || $img_type == 'png'){
                                                                $output3 = move_uploaded_file($_FILES["dfimage"]["tmp_name"],$path3);
                                                                if($output3){

                                                                    $dbimage   = $_FILES["dbimage"]["name"];
                                                                    $size_check = getimagesize($_FILES["dbimage"]["tmp_name"]);
                                                                    $img_type  = strtolower(pathinfo($_FILES["dbimage"]["name"],PATHINFO_EXTENSION));
                                                                    $path4  = $directory.basename($dbimage);
                                                                
                                                                    if($size_check !== false){
                                                                        if($_FILES["dbimage"]["size"] < 50000000){
                                                                            if($img_type == 'jpg' || $img_type == 'jpeg' || $img_type == 'png'){
                                                                                $output4 = move_uploaded_file($_FILES["dbimage"]["tmp_name"],$path4);
                                                                                if($output4){

                                                                                    $query2 = "SELECT * from user WHERE email = '$email'";
                                                                                    $result2 = mysqli_query($conn, $query2);
                                                                                    $row2 = mysqli_fetch_assoc($result2);
                                                                                    $d_id = $row2['id'];

                                                                                    $query3 = "INSERT INTO delivery_person (d_id, vehicle_type, license_plate, license_p_image, License_image_front, License_image_back)VALUES('$d_id','$vtype','$lno','$path2','$path3','$path4')";
                                                                                    $result3 = mysqli_query($conn, $query3);

                                                                                    

                                                                                }
                                                                            }
                                                                        }
                                                                    }

                                                                    

                                                                }
                                                            }
                                                        }
                                                    }

                                                }
                                            }
                                        }
                                    }
                                }
                                }
                                }
                            }
                        }
            } else {
                $err = "Inalid NIC";
            }  
        }else{
            $err = "Invalid Phone Number";
        }
    }


}

?>
<?php
    require_once('dbconn.php');
    require_once('header-1.php');
    require_once('navbar.php');
    $ID = $_GET['cid'];
    $query="select * from customer where id = '$ID'";
    $result= mysqli_query($conn,$query); 
    $row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="css/del_phar_window.css" type="text/css">
<title>del</title>
</head>
<body>
<section class="home">


      
                

    <div class="container">
      <h1>Delete Account!</h1>
      <p>Are you sure you want to delete this account?</p>
    
      <div class="clearfix">
        <button type="button" class="cancelbtn"><a href="customerlist.php">Cancel</a></button>

                        
        <button type="button" class="deletebtn" name="deletebtn"><a href="add_customer.php?ID=<?php echo $row['id'];?>">Delete</a></button>
        </div>
    </div> 

</section>
</body>
</html>
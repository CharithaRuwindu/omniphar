<?php
    require_once('dbconn.php');
    require_once('header-1.php');
    require_once('navbar.php');
    $mid=$_GET['mid'];
    $query="select * from item where med_Id=$mid";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_assoc($result);
    $query2="select * from dosage where med_id=$mid";
    $result2=mysqli_query($conn,$query2);
    $row2=mysqli_fetch_assoc($result2);


?>

<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" href="css/medicine_info.css" type="text/css">
    </head>

	<body> 
    <section class="home">
    <div class="div1">
        <div>
            <h1>Medicine Info</h1>
        </div>
        <br><br><br>
        <center>        
          <div style="width: 50%;background-color: rgba(73, 148, 235, 0.877);padding: 5px;border-radius: 10px;">
            <form class="form1" action="/">
              
              <div class="info">
                <label>Category:</label>
                <div class="div2">
                <?php echo $row['category']; ?>
                </div>                
                <label>Name:</label>
                <div class="div2">
                <?php echo $row['name']; ?>
                </div>
                <label>Brand:</label>
                <div class="div2">
                <?php echo $row['brand']; ?>
                </div>
                <label>Description:</label>
                <div class="div2">
                <?php echo $row['description']; ?>
                </div>
                <label>Price:</label>
                <div class="div2">
                <?php if($row['category']!='medicine'){ echo $row['price']; }else{ echo $row2['price']; } ?>
                </div>
                <label>Image:</label>
                <div class="div2">
                  <div style="width: 50%;height: 50%;">
                    <img src="<?php echo $row['image'];?>">
                  </div>
                </div>

                <br>
              </div>
            </form>
          </div>
        </center>
<br>
<br>
<br>

    </section>
    </section>
    </body>
</html>
<?php
    require_once('dbconn.php');
    $query="select * from medicine";
    $result= mysqli_query($conn,$query);
    require_once('header.php');
    require_once('navbar.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Side Navbar - Tivotal</title>
    <link rel="stylesheet" href="css/all_med.css" />
    <script src="https://kit.fontawesome.com/2816eb5ad3.js" crossorigin="anonymous"></script>
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>

    <section class="home">
      <div class="body">
      <div class="main-title">
          <p class="font-weight-bold">ALL MEDICINE</p>
        </div>
      
<br>

  <table class="table1">
  <tr>
  <th>Medicine ID</th>
  <th>Name</th>
  <th>Brand</th>
  <th>Price</th>
  <th>Per</th>
  <th>Action</th>
  <th></th>
  </tr>
  
  <?php
                        while($row = mysqli_fetch_assoc($result))
                        {
                    ?>
                    <tr>
                    <td> <?php echo $row['med_Id']; ?></td>
                    <td> <?php echo $row['name']; ?></td>
                    <td> <?php echo $row['brand']; ?></td>
                    <td> <?php echo $row['price']; ?></td>
                    <td> <?php echo $row['per']; ?></td>
                    <td><button type="button" class="edit_button"> <a href="edit_med1.php?id=<?php echo $row['med_Id']; ?>">Edit</a></button>
                    <button type="button" class="del_button" onclick="document.getElementById('popUp').style.display='block'">Delete</button></td>
                    <td><button type="button" class="button"> <a href="med_profile.php">Details</a></button></td>
                    </tr>
                    <?php
                    }
                ?>  
  
</table><br><br><br><br>
      </div>

      <div id="popUp" class="popUpContent">
        <div class="popUpContainer">
            <span class="close">&times;</span>
            <p>Are you sure you want to delete this?</p>
            <button class="acceptBtn" onclick="document.getElementById('popUp').style.display='none';">Yes</button>
            <button class="acceptBtn" onclick="document.getElementById('popUp').style.display='none';">No</button>
        </div>
    </div>

    <script>
        var popUpContent = document.getElementById('popUp');
        var span = document.getElementsByClassName("close")[0];

        span.onclick = function() {
            popUpContent.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == popUpContent) {
                popUpContent.style.display = "none";
            }
        }
        </script>

    </div>
    
    </section>
  
  </body>
</html>

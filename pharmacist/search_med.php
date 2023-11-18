<?php
    require_once('dbconn.php');
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
 if(isset($_POST['submit'])) {
    $search = $_POST['search'];
  // Prepare and execute SQL query
  $sql = "SELECT * FROM medicine";$query = "SELECT * FROM medicine WHERE name LIKE'%{$search}%' OR brand LIKE '%{$search}% '" ;
  $result = mysqli_query($conn, $sql);
// Check if any row is returned

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)){
  echo "
      <tr>
          <td>{$row['med_Id']}</td>
          <td>{$row['name']}</td>
          <td>{$row['brand']}</td>
          <td>{$row['price']}</td>
          <td>{$row['per']}</td>
          <td>
              <a type='button' class='edit_button' href='med_edit.php?med_Id={$row['med_Id']}'>Edit</a>
              <a type='button' class='del_button' href='del_med.php?med_Id={$row['med_Id']}'>Delete</a>
          </td>
          <td><button type='button' class='button'> <a href='med_profile.php?med_Id={$row['med_Id']}'>Details</a></button></td>
      </tr>
  ";}
} else {
  echo "No record found!";
}
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

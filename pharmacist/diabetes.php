<?php
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
    <link rel="stylesheet" href="css/diabetes.css" />
    <script src="https://kit.fontawesome.com/2816eb5ad3.js" crossorigin="anonymous"></script>
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
  <section class="home">
      <div class="body">
    

      <!-- Main -->
        <div class="main-title">
          <a href="central_Nsystems.php"><span class= "bx bxs-injection bx-tada text-red" ></span></a>
          <p class="font-weight-bold">DIABETES</p><br>
          </div>
          <span class="main-title mini-title">Medication for Diabetes</span>
        
      

      <table class="table1">
  <tr>
  <th></th>
  <th></th>
  </tr>
  <?php
   $query="select * from medicine where category='Diabetes'";
   $result= mysqli_query($conn,$query);
                        while($row = mysqli_fetch_assoc($result))
                        {
                    ?>
                    <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td></td>
                    </tr>
                    <?php
                    }
                ?> 

</table>
      </div>
    </section>

  
  </body>
</html>

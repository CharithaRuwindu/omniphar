
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ominiphar</title>
    <link rel="stylesheet" href="css/navbar.css" />
    <script src="https://kit.fontawesome.com/2816eb5ad3.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>
</head>
<body>
    
<section class="sidebar">
    <div class="nav-header">
      <p class="logo">Dashboard</p>
      <i class="bx bx-menu-alt-right btn-menu"></i>
    </div>
    <ul class="nav-links">
      
    <li>
        <a href="home.php">
        <i class='bx bxs-home' ></i>          
          <span class="title">Home</span>
        </a>
      </li>
      <li>
        <a href="c_profile.php">
        <i class='bx bxs-user-account'></i>            
          <span class="title">  User Account  </span>
        </a>
      </li>
      <li>
        <a href="myorders.php">
          <i class='bx bxs-package'></i>            
          <span class="title">My Orders</span>
        </a>
      </li>
      <li>
        <a href="chatwithpharmacy.php">
        <i class='bx bxs-phone-call' ></i>          
          <span class="title">Customer Support</span>
        </a>
      </li>
      <li id="logout" class="logout">
        <a href="../logout.php">
          <i class='bx bxs-log-out'></i>            
          <span class="title">Log out</span>
        </a>
      </li>
    </ul>
</section>
<script>
      const btn_menu = document.querySelector(".btn-menu");
      const side_bar = document.querySelector(".sidebar");

      btn_menu.addEventListener("click", function () {
        side_bar.classList.toggle("expand");
        changebtn();
      });

      function changebtn() {
        if (side_bar.classList.contains("expand")) {
          btn_menu.classList.replace("bx-menu", "bx-menu-alt-right");
        } else {
          btn_menu.classList.replace("bx-menu-alt-right", "bx-menu");
        }
      }
    </script>
</body>
</html>
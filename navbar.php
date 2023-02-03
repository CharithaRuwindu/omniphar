<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Side Navbar - Tivotal</title>
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
        <a href="#">
          <i class='bx bx-plus-medical'></i>            
          <span class="title">Pharmacies</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bxs-user'></i>            
          <span class="title">Customers</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bxs-truck'></i>            
          <span class="title">Delivery persons</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bxs-package'></i>            
          <span class="title">Orders</span>
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
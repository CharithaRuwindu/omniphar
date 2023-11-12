<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/delivery_person/navbar.css" />
    <script src="https://kit.fontawesome.com/2816eb5ad3.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>
    <link rel="icon" href="assets/omniphar.png">
</head>
<body>
    
<section class="sidebar">
    <div class="nav-header">
      <p class="logo">Dashboard</p>
      <i class="bx bx-menu-alt-right btn-menu"></i>
    </div>
    <ul class="nav-links">
      
      <li>
        <a href="packed.php">
          <i class='bx bxs-package'></i>            
          <span class="title">Packed to deliver</span>
        </a>
      </li>
      <li>
        <a href="new.php">
          <i class='bx bxs-truck'></i>            
          <span class="title">Dispatched Deliveries</span>
        </a>
      </li>
      <li>
        <a href="new2.php">
          <i class='bx bxs-check-circle'></i>            
          <span class="title">Completed Deliveries</span>
        </a>
      </li>
      <li>
        <a href="d_profile.php">
          <i class='bx bxs-user-account'></i>            
          <span class="title">User Account</span>
        </a>
      </li>
      <li>
        <a href="chat.php">
          <i class='bx bxs-phone-call'></i>            
          <span class="title">Support Inbox</span>
        </a>
      </li>
      <li>
        <a href="leaveform.php">
          <i class='bx bx-task-x'></i>            
          <span class="title">Leave</span>
        </a>
      </li>
      <li id="logout" class="logout">
        <a href="../logout.php">
          <i class='bx bx-log-out'></i>            
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
<html>
    <head>
    <title>Customer list</title>
    <link rel="stylesheet" href="med_list.css"> 
    <script src="https://kit.fontawesome.com/14a965c2a0.js" crossorigin="anonymous"></script>  
    </head>
    <body>
    <div class="topnav"> 
  <a href="order_list.php">Order</a>
  <a class="active" href="med_list.php">Medicine</a>
  <a href="cus_list.php">Customer</a>
  <div class="search-container">
    <form action="">
      <img src="logo1.png" alt="logo">
      <button type="button">logout</button>
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
  </div>
  <h1><b>Medicine List</b></h1>
  <button type="button" class="med-button"><a href="add_med.php">Add medicine</a></button>
  <button type="button" class="med-button"><a href="med_tbl.php">All medicine</a></button>
  <br/><br/><br/>
  <h1><i>Search</i></h1>
  <div class="search-container1">
    <form action="">
      <input type="text" placeholder="  Search by name" name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
  <h1><i>Browse A-Z</i></h1>

  <ul class="alphabet">

                        <li class="letter"><a href="drug_a.php">A</a></li>
                        <li class="letter">B</li>
                        <li class="letter">C</li>
                        <li class="letter">D</li>
                        <li class="letter">E</li>
                        <li class="letter">F</li>
                        <li class="letter">G</li>
                        <li class="letter">H</li>
                        <li class="letter">I</li>
                        <li class="letter">J</li>
                        <li class="letter">K</li>
                        <li class="letter">L</li>
                        <li class="letter">M</li>
                        <li class="letter">N</li>
                        <li class="letter">O</li>
                        <li class="letter">P</li>
                        <li class="letter">Q</li>
                        <li class="letter">R</li>
                        <li class="letter">S</li>
                        <li class="letter">T</li>
                        <li class="letter">U</li>
                        <li class="letter">V</li>
                        <li class="letter">W</li>
                        <li class="letter">X</li>
                        <li class="letter">Y</li>
                        <li class="letter">Z</li>
                    </ul>
                    <br><br>

  <h1><i>Browse by category</i></h1>
  </body>  
</html>
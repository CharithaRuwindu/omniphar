<?php
    // require_once('header.php'); 
    // require_once('navbar.php');
    // require_once('pro_rate.php');
    require_once('dbconn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/rate.css">
    <script src="https://kit.fontawesome.com/2816eb5ad3.js" crossorigin="anonymous"></script>
    <title> rate3 page</title>
    <link rel="icon" href="assets/omniphar.png">
</head>
<body>
    <div class="content">
        <div class= "div_rating">
        
            <div class="topic">
                <h3> Give your valuable comments for our service</h3>
            </div>
            
            <div class="post">
                <div class="text">Thankz for rating us!</div>
            </div>
            
            <div class= "star-widget">
            
  <form action="" method="POST">
    <header></header>
    <input type="radio" name="rate" id="rate-5">
    <label for="rate-5" class="fas fa-star"></label>
    <input type="radio" name="rate" id="rate-4">
    <label for="rate-4" class="fas fa-star"></label>
    <input type="radio" name="rate" id="rate-3">
    <label for="rate-3" class="fas fa-star"></label>
    <input type="radio" name="rate" id="rate-2">
    <label for="rate-2" class="fas fa-star"></label>
    <input type="radio" name="rate" id="rate-1">
    <label for="rate-1" class="fas fa-star"></label>
    <div class="textarea">
      <textarea cols="30" placeholder="Add your comments.." name="phar-comments"></textarea>
    </div>
    <div class="btn">
      <button type="submit" name="sub_btn"> post </button>
    </div>
  </form>


            </div>
        </div>
        <script> 
            const btn = document.querySelector("button");
            const post = document.querySelector(".post");
            const widget = document.querySelector(".star-widget");
            btn.onclick = () => {
                widget.style.display = "none";
                post.style.display = "block";
                return false;
            }
        </script>
    </div>

</body>
</html>
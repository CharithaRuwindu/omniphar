<?php
    require_once('headerforall.php'); 
    require_once('navbar.php');
    require_once('pro_rate.php');
    require_once('dbconn.php');

    $oid = $_GET['oid'];

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
                <table>
                    <tr>
                        <td>
                            <div class= "div_rating">
                                <form action="pro_rate.php" method="POST">
                                    <input type="text" name="oid" value="<?php echo $oid?>" hidden>
                                    <div class="topic">
                                        <h3> Give your valuable comments for our service</h3>
                                    </div>

                                    <div class= "star-widget">
                                        <input type="radio" name="rate1" value="5" id="rate-5">
                                        <label for="rate-5" class="fas fa-star" > </label>
                                        <input type="radio" name="rate1" value="4"  id="rate-4">
                                        <label for="rate-4" class="fas fa-star" > </label>
                                        <input type="radio" name="rate1" value="3"  id="rate-3">
                                        <label for="rate-3" class="fas fa-star" > </label>
                                        <input type="radio" name="rate1" value="2"  id="rate-2">
                                        <label for="rate-2" class="fas fa-star" > </label>
                                        <input type="radio" name="rate1" value="1"  id="rate-1">
                                        <label for="rate-1" class="fas fa-star" > </label>
                                        
                                            <div class="hidden_area">
                                                <p></p>
                                                <div class="textarea">
                                                    <textarea cols="30" placeholder="Add your comments.." name="phar-comments"   required></textarea>
                                                </div>

                                            </div>

                                    </div>
                            
                        

                            <!-- new one -->


                                    <div class="topicn">
                                        <h3> Give your valuable comments for delivery person</h3>
                                    </div>

                                    <div class= "star-widget">
                                        <input type="radio" name="rate2" value="5"id="rate-10">
                                        <label for="rate-10" class="fas fa-star" ></label>
                                        <input type="radio" name="rate2" value="4"id="rate-9">
                                        <label for="rate-9" class="fas fa-star" ></label>
                                        <input type="radio" name="rate2" value="3" id="rate-8">
                                        <label for="rate-8" class="fas fa-star" ></label>
                                        <input type="radio" name="rate2" value="2" id="rate-7">
                                        <label for="rate-7" class="fas fa-star" ></label>
                                        <input type="radio" name="rate2" value="1" id="rate-6">
                                        <label for="rate-6" class="fas fa-star" ></label>
                                        
                                            <div class="hidden_arean">
                                                <p></p>
                                                <div class="textarea">
                                                    <textarea cols="30" placeholder="Add your comments.." name="dperson_comments"  required></textarea>
                                                </div>
                                                <div class="btn">
                                                    <button name="sub_btn"> Sumbit </button>
                                                </div> 
                                            </div>

                                    </div>
                                </form>
                            </div>

                        </td>
                        <td>
                            <img src="assets/rate.png" class="rateimg">
                        </td>
                    </tr>
                </table>
                

                <script> 
                    const widget = document.querySelector(".star-widget");
                    const btn = document.querySelector("button");
                    btn.onclick = () => {
                        widget.style.display = "none";
                        return false;
                    }
                </script>
            </div>
        </body>
        </html>
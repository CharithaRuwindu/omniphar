<?php
    require_once('headerforall.php'); 
    require_once('navbar.php'); 
    // require_once('footer.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/checkout.css">
    <script src="https://kit.fontawesome.com/2816eb5ad3.js" crossorigin="anonymous"></script>
    <title> checkout page</title>
    <link rel="icon" href="assets/omniphar.png">
</head>
<body>
    <div class="div_upper"></div>
    <div class="content">
        <table class="checkouttbl">
            <tr>
                <td>
                    <div class="topic">
                        <h2> Payment methods </h2> 
                        <img src="assets/visacard.png" class="card">
                        <img src="assets/mastercard.png" class="card">
                    </div>
                    <div class="topic2">
                        <h2> Provide payment information</h2>
                    
                        <form class="form" action="pro_checkout.php">
                            <input type="text" placeholder="Card Number" class="crddetails"> 
                            <input type="text" placeholder="CVV" class="crddetails2"> 
                        </br>
                            <input type="text" placeholder="MM" class="date">
                            <input type="text" placeholder="YY" class="date">
                            <input type="submit" value="Submit" class="btn1">
                        </form>
                    </div>
                </td>
                <!-- <td> -->

                    <!-- <div class="d_or_t">
                        <p> <b> How to you prefer to receive the order ? </b> </p>  </br> 
                        <label class="container2"> By myself
                                <input type="radio" checked="" name="radio"> </label>
                        </br> </br>
                        <label class="container2"> Get delivered
                                <input type="radio" checked="" name="radio"> </label>
                    </div> -->

                    <!-- <div class="rtables">
                        <h2 >Summary</h2>
                        <table class="righttable" >
                            <tr>
                                <td>Total item costs</td>
                                <td >LKR 0.00</td>
                            </tr>
                            <tr>
                                <td>Delivery charges</td>
                                <td >LKR 0.00</td>
                            </tr>
                        </table> -->
                        <!-- <hr> -->
                        <!-- <table class="righttable">
                            <tr>
                                <td><b> Total</b> </td>
                                <td class="amt"><b>LKR 0.00</b></td>
                            </tr>
                        </table>
                        <input type="submit" value="Place Order" class="placeholderbtn">
                    </div> -->

                    <!-- <div class="d_or_t">
                        <p> <b> How to you prefer to receive the order ? </b> </p>  </br> 
                        <label class="container2"> By myself
                                <input type="radio" checked="" name="radio"> </label>
                        </br> </br>
                        <label class="container2"> Get delivered
                                <input type="radio" checked="" name="radio"> </label>
                    </div> -->
                    
                </td>
            </tr>
        </table>

    </div>
</body>
</html>
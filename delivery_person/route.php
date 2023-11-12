<?php
require_once('dbconn.php');
require_once('header.php');
require_once('navbar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/delivery_person/route.css">
</head>
<body>
    <div class="content">
    <div class="order_details">
            <table class="detail_tbl">
                <tr>
                    <td>Order ID :</td>
                    <td>001</td>
                </tr>
                <tr>
                    <td>Order Date :</td>
                    <td>2023/01/05</td>
                </tr>
                <tr>
                    <td>Address :</td>
                    <td>4/72, Beach Road, Negambo</td>
                </tr>
                <tr>
                    <td>Customer :</td>
                    <td>Janith Athukorale</td>
                </tr>
            </table>
            <div class="img-container">
                <img src="assets/route_img.png" class="route_img">
            </div>
    </div>
    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18570.154563506094!2d79.86658496752376!3d6.929175744980544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2591514038547%3A0xa12560c4d858fc3f!2sNawaloka%20Hospitals%20PLC!5e0!3m2!1sen!2slk!4v1675670885696!5m2!1sen!2slk" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    </div>
</body>
</html>
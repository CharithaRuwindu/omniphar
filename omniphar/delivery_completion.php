<!DOCTYPE html>
<html>
    <head>
        <title>Delivery Completion</title>
        <link rel="stylesheet" href="css/delivery_completion.css">
    </head>
    <body>
        <div class="topnav">

        </div>
        <img src="assets/logo.png" alt="logo">
        <div class="delivery_form">
        <form action="pro_d_completion.php" method="POST">
            <h1>Delivery Completion</h1>
            <p class="description">Order ID</p>
            <input type="text" class="detail" placeholder="Enter Order ID" name="oid">
            <p class="description">Date</p>
            <input type="date" class="detail" name="cdate">
            <p class="description">Time</p>
            <input type="time" class="detail" name="ctime">
            <br>
        <input type="submit" id="btn" value="Submit" name="sub_btn">
        </form>
        </div>
    </body>
</html>
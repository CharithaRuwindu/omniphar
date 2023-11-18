
<?php 
    require_once ('pro_addcustomer.php');
    require_once ('admin_header.php');
    require_once ('admin_navbar.php');
 ?>
 <html>
    <head>
        <title> Add Customer</title>
        <link rel="stylesheet" href="css/addcustomer.css">
    </head>
    <body>
        <div class="div_upper"></div>
        <div class="content">
        <div class="middleform">
            <div class="topicleft">
                <h1> Register a Customer</h1>
            </div>
        <form action="" method="POST">
            <div class="divtable">
                <table class="formtbl">
                    <tr>
                        <td> <b> First Name:- </b></td>
                        <td> <input class="input2"  name="first_name" required> </td>
                    </tr>
                    <tr>
                        <td> <b> Last Name:- </b></td>
                        <td> <input class="input2"  name="last_name" required> </td>
                    </tr>
                    <tr>
                        <td> <b>Address:-</b></td>
                        <td> <input class="input2"  name="address" required> </td>
                    </tr>
                    <tr>
                        <td> <b>Contact Number:- </b></td>
                        <td> <input class="input2"  name="cnumber" required> </td>
                    </tr>
                    <tr>
                        <td> <b>Email:- </b></td>
                        <td>  <input class="input2" type="email" name="email" required></td>
                    </tr>
                    <tr>
                        <td> <b> Password:- </b> </td>
                        <td> <input class="input2" type="password" name="password" required> </td>
                    </tr>
                </table>
                <div class="rightbtn">
                    <button class="btn_right" type="submit" name="sub_btn"> <b> Save </b></button>
                </div>
                <div class="error"><span class = "error"><?php echo $err ?></span></div><br>
            </div>
        </form>
        </div>

        <img src="assets/regcus.png" class="rightimg">
    
        </div>

    </body>
</html>
<?php
    require_once('dbconn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/landing_header.css">
    <script src="https://kit.fontawesome.com/2816eb5ad3.js" crossorigin="anonymous"></script>
    <title>OMNIphar</title>
    <link rel="icon" href="assets/omniphar.png">
</head>
<body>

    <!--topbar-->
    <header class="header">
        <div class="top-bar">
            <div class="logo-container">
                <img src="assets/omniphar.png" alt="logo" class="logo">
            </div>
            <div class="search-container">
                <form action="index.php" method="POST" class="search-form">
                    <input type="text" name="search" placeholder="Search for items" class="search-box">
                    <button type="submit" name="submit" class="lens"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="icon-container">
                <table class="tbl">
                    <tr>
                        <td><a href="login.php"><button>Sign in</button></a></td>
                        <td><a href="auth/signup.php"><button>Sign up</button></a></td>
                    </tr>
                </table>
        </div>
    </header>

        <!--navigation bar-->
        <div class="navigation-bar">
        <ul>
            <li> <a href="#"> <i class="fa-solid fa-capsules"></i> Medicine </a>
                <div class="sub-menu-1">
                    <ul>
                        <li> <a href="landing_filter.php?sub_category=heart"> Heart</a></li>
                        <li> <a href="landing_filter.php?sub_category=center nervous system"> Center nervous system</a></li>
                        <li> <a href="landing_filter.php?sub_category=eye"> Eye</a></li>
                        <li> <a href="landing_filter.php?sub_category=diabetes"> Diabetes</a></li>
                        <li> <a href="landing_filter.php?sub_category=nose,ear,throat"> Nose,Ear,Throat</a></li>
                        <li> <a href="landing_filter.php?sub_category=inflaction"> Inflection</a></li>
                        <li> <a href="landing_filter.php?sub_category=muscle & joint"> Muscle & joint</a></li>
                        <li> <a href="landing_filter.php?sub_category=medother"> Others</a></li>
                    </ul>
                </div>
            </li>
            <li> <a href="#"> <i class="fa-solid fa-stethoscope"> </i> Medical Devices </a>
                <div class="sub-menu-1">
                    <ul>
                        <li> <a href="landing_filter.php?sub_category=health devices"> Health Devices</a></li>
                        <li> <a href="landing_filter.php?sub_category=first aid"> First Aid</a></li>
                        <li> <a href="landing_filter.php?sub_category=sports and braces"> Sports and Braces</a></li>
                    </ul>
                </div>
            </li>
            <li> <a href="#"> <i class="fa-solid fa-person-half-dress"> </i>Personal Care </a>
                <div class="sub-menu-1">
                    <ul>
                        <li> <a href="landing_filter.php?sub_category=skin care"> Skin Care</a></li>
                        <li> <a href="landing_filter.php?sub_category=body care"> Body Care</a></li>
                        <li> <a href="landing_filter.php?sub_category=nourishment"> Nourishment</a></li>
                        <li> <a href="landing_filter.php?sub_category=oral care"> Oral Care</a></li>
                        <li> <a href="landing_filter.php?sub_category=hand & foot care"> Hand & Foot Care</a></li>
                    </ul>
                </div>
            </li>
            <li> <a href="#"> <i class="fa-solid fa-briefcase-medical"> </i>Wellness </a>
                <div class="sub-menu-1">
                    <ul>
                        <li> <a href="landing_filter.php?sub_category=diet & nutritions"> Diet & Nutritions</a></li>
                        <li> <a href="landing_filter.php?sub_category=mother & baby items"> Mother & Baby Items</a></li>
                        <li> <a href="landing_filter.php?sub_category=allergy"> Allergy</a></li>
                        <li> <a href="landing_filter.php?sub_category=pain"> Pain & Fever</a></li>
                        <li> <a href="landing_filter.php?sub_category=preventive care"> Preventive Care</a></li>
                    </ul>
                </div>
            </li>
            <li> <a href="#"> <i class="fa-solid fa-plus"> </i> Others</a> </li>
        </ul>
    </div>

</body>
</html>


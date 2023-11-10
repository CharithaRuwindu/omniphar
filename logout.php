<?php
    session_start();
    require_once('dbconn.php');
    session_unset();
    session_destroy();

    header("Location:login.php");
?>
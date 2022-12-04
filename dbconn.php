<?php
$server = "localhost";
$database = "firstone";
$username = "root";
$password = "";

$conn = new mysqli($server,$username,$password,$database);

if(!$conn){
    die("connection error");
}


?>
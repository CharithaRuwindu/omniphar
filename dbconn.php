<?php
$server = "localhost";
$database = "omniphar";
$username = "root";
$password = "";

$conn = new mysqli($server,$username,$password,$database);

if(!$conn){
    die("connection error");
}


?>
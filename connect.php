<?php
$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecole";
    $db =  mysqli_connect($servername,$username,$password,$dbname);
    if(!$db){
        die("connection failed:");
    } 
?>
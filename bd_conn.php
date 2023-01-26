<?php

$sname = "localhost";
$unmae = "root";
$password = "";

$nom_bd = "test";

$connex = mysqli_connect($sname, $unmae ,$password ,$nom_bd);

if (!$connex) {
    echo "erreur de connection";
}
<?php

$serverName = "localhost";
$dbUserName = "root";
$dBPassword = "";
$dBName     = "dbName";

$conn = mysqli_connect(serverName, dbUserName, dBPassword, dBName)

if (!$conn){
    die("Conection faild: " .mysqli_connect_error)
}
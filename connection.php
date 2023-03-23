<?php

$dbName = "dbuca";
$userAuth = "root";
$passAuth = "";
$serverIp = "localhost";
$mysql = new mysqli($serverIp,$userAuth,$passAuth,$dbName);

if($mysql->connect_error){
    die("Connection error");
}
?>
<?php

$host = "localhost";
$username = "root";
$psw = "";
$dbName = "";

try{
    $conn = mysqli_connect($host, $username, $psw, $dbName);
}
catch(Exception $e){
    echo "Error! :" .$e->getMessage();
}
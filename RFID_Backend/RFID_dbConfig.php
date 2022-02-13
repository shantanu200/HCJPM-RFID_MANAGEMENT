<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbName = "dummy_data";

$conn = new mysqli($host,$user,$pass,$dbName);

if($conn->connect_error){
    die("Error: ".$conn->connect_error);
}


?>

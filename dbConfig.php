<?php

$host = "localhost";
$uesername = "root";
$password = "";
$dbName = "RFID";

$conn = new mysqli($host,$uesername,$password,$dbName);

if($conn->connect_errno){
    die("Error: ".$conn->connect_error);
}

session_start();

?>
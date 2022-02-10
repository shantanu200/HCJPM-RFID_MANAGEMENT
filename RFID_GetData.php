<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "test_rfid";

$conn = new mysqli($host,$username,$password,$dbname);

if($conn->connect_error){
   die("Error: ".$conn->connect_error);
}

$card_uid = $device_token = '';

if(isset($_GET['card_uid']) && isset($_GET['device_token'])){
   
   $card_uid = $_GET['card_uid'];
   echo $card_uid;
   $insert = "INSERT INTO rfid_data(card_id) VALUES('$card_uid')";
   $exe = mysqli_query($conn,$insert);

   if($exe){
      echo "Sucess";
   }else{
      echo "Failure";
   }

}else{
   echo "Request Failed";
}
?>
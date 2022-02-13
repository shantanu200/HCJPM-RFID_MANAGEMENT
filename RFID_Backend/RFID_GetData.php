<?php

require "RFID_dbConfig.php";

function check($id){
    global $conn;
    $que = "SELECT * FROM rfid_data WHERE cardid='$id'";
    $exe = mysqli_query($conn,$que);
    $row = mysqli_num_rows($exe);

    if($row>0){
       return true;
    }else{
        return false;
    }
}

function insert($id){
   global $conn;
   $que = "INSERT INTO rfid_data(cardid) VALUES ('$id')";
   $exe = mysqli_query($conn,$que);
   if($exe){
       echo "Data is added to DB";
   }
   else{
       echo "Data insertion failed";
   }

}
if(isset($_POST['card_id'])){
    $id = $_POST['card_id'];
    if(check($id)){
        echo "card is exist";
    }else{
        insert($id);
    }
}


?>
<?php

   header("Content-Type: application/json; charset=UTF-8");
   $host='localhost';
   $uname='root';
   $pwd='';
   $db='loginregister';

   $conn = new mysqli($host,$uname,$pwd,$db) or die("connection failed");
   if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
   }
   
   $sql = "SELECT username, roomspace, foodname, foodtype, onAir, cold, frozen, start_date FROM enrolled_data, life WHERE enrolled_data.foodtype = life.name";

   $result = mysqli_query($conn, $sql);

$json_data = array();
while($row = mysqli_fetch_assoc($result)){
   $json_data[] = $row;
} 
echo json_encode($json_data);
 
    $result->free();
    mysqli_close($conn);
   
?>
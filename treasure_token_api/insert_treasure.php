<?php
include("../conn.php");
// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");

$num=1000;
$str="treasure_finders_token_";
for ($i=0; $i<$num; $i++){
    $sql = "INSERT INTO `treasure_finders_token` (token) VALUES ('".$str.$i."');";
    if ($conn->query($sql) === TRUE){
        echo "New record created successfully";
    } else {
        echo "Error:" . sql . "<br>" . $conn->error;
    }
}



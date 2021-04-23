<?php
include("../conn.php");

$sql = "DROP TABLE treasure_finders_token";
if ($conn->query($sql) === TRUE){
    echo "treasure_finders_token table dropped";
} else {
    echo "Error:" . sql . "<br>" . $conn->error;
}
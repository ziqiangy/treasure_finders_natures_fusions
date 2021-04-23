<?php
include("../conn.php");

$sql = "CREATE TABLE `treasure_finders_token` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `token` varchar(255) NOT NULL,
    `status` tinyint(1) NOT NULL DEFAULT '1',
    `email` varchar(255) DEFAULT NULL,
    PRIMARY KEY (`id`)
    )";
if ($conn->query($sql) === TRUE){
    echo "treasure_finders_token table created";
} else {
    echo "Error:" . sql . "<br>" . $conn->error;
}
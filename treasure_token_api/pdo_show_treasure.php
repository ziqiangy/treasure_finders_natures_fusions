<?php
include('../config.php');
include('../db.php');
$db = new DB;

$sql = "select * from `treasure_finders_token`";

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$data = $db->pdo()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
if($data){
    echo json_encode($data);
}else{
    http_response_code(404);
    echo json_encode(
        array("message"=>"No items found.")
    );
}



<?php
include('../conn.php');
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$sql = "select `id`,`token`,`status`,`email` from `treasure_finders_token`";
$result = $conn->query($sql);
$arr = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        array_push($arr,$row);
    }
} else {
    echo "0 results";
}

if($result){
    echo json_encode($arr);
}else{
    http_response_code(404);
    echo json_encode(
        array("message"=>"No items found.")
    );
}
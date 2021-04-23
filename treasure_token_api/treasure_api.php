<?php
include('../conn.php');
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

//post data: email: treasure finder email address; num:how many tokens send to this finder
//email:$_POST["email"]
//num:$_POST["num"]

//select top 3 sql
$sql = "SELECT `token` FROM `treasure_finders_token` WHERE `status`=1 LIMIT ".$_POST["num"];

$result = $conn->query($sql);
$arr = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        array_push($arr,$row);
    }
} else {
    echo "0 results";
}


//update top 3 rows set status=1 to status =0, update email
$sql = "UPDATE `treasure_finders_token` SET `status` = '0', `email` = '".$_POST["email"]."' WHERE `status`='1' LIMIT ".$_POST["num"];
if ($conn->query($sql) !== TRUE){
    echo "Error:" . sql . "<br>" . $conn->error;
}
//return json data for treasure tokens
if($result){
    echo json_encode($arr);
}else{
    http_response_code(404);
    echo json_encode(
        array("message"=>"No items found.")
    );
}
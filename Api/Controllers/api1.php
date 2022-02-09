<?php

// Gets two numbers (x and y) as parameters
// returns: 2 * x + y % 2

//Missing Parameters
if (!isset($_GET["x"]) || !isset($_GET["y"])){
    echo json_encode(array("status"=>400,"message"=>"Bad Request"));
    return false;
}

//Wrong Parameters
if (!is_numeric($_GET["x"]) || !is_numeric($_GET["y"])){
    echo json_encode(array("status"=>400,"message"=>"Wrong Request"));
    return false;
}

//Retrieve Values
$x=$_GET["x"];
$y=$_GET["y"];

//Calculate Result
$result=(2*$x)+($y%2);

//Return json object of api result
$json = array("x" => $x, "y" => $y, "result" => $result);
echo json_encode($json);

?>
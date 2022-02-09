<?php

// Takes a string as a parameter
// returns: string without extra blank spaces

//Missing Parameters
if (!isset($_GET["text"])){
    echo json_encode(array("status"=>400,"message"=>"Bad Request"));
    return false;
}

//Wrong Parameters
if (!is_string($_GET["text"])){
    echo json_encode(array("status"=>400,"message"=>"Wrong Request"));
    return false;
}

//Retrieve String
$text=$_GET["text"];
//Trim String
$result=trim($text);

//Return json object of api result
$json = array("text" => $text, "trimmed" => $result);
echo json_encode($json);

?>
<?php

// Takes a string as a parameter
// returns: PALINDROME or not

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
$palindrome=true;
$result="";

//Left (start of string)
$left=0;
//Right (end of string)
$right=strlen($text)-1;

//Left index and right index values are compared.
while ($left <= $right) {
    if($text[$left]!=$text[$right]){
        $palindrome=false;
        break;
    }
    $left++;
    $right--;
}

//Change Result
if($palindrome){
    $result="Palindrome";
}else{
    $result="Not a Palindrome";
}

//Return json object of api result
$json = array("text" => $text, "result" => $result);
echo json_encode($json);

?>
<?php

// Gets a string (representing a password) as a parameter
// returns: Password Validation and Hashed

//Missing Parameters
if (!isset($_GET["pass"])){
    echo json_encode(array("status"=>400,"message"=>"Bad Request"));
    return false;
}

//Wrong Parameters
if (!is_string($_GET["pass"])){
    echo json_encode(array("status"=>400,"message"=>"Wrong Request"));
    return false;
}

//Retrieve and Hash String
$password=$_GET["pass"];
$hashed_password=hash('sha256', $password);
$result=false;

//Validate String Length and Content
$valid_length=validateLength($password);
$valid_content=validateContent($password);

//Validate Length Function: Length Minimum 8
function validateLength($text){
    if(strlen($text)>=8){
        return true;
    }else{
        return false;
    }
}

//Validate Content Function: Content is Alpha AND Numeric ONLY
function validateContent($text){
    if (preg_match('/[A-Za-z]/', $text)
        && preg_match('/[0-9]/', $text) 
        && ctype_alnum($text)){
        return true;
    }else{
        return false;
    } 
}

//Change Result
if($valid_length && $valid_content){
    $result=true;
}else{
    $result=false;
}

//Return json object of api result
$json = array("password" => $hashed_password, "Valid" => $result);
echo json_encode($json);

?>
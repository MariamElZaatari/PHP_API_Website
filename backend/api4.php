<?php

// Gets a string (representing a password) and 
// returns if this parameter is a minimum of 8 characters, 
// and contains alphabets and numbers.

$password=$_GET["pass"];
$hashed_password=hash('sha256', $password);
$result="";

$valid_length=validateLength($password);
$valid_content=validateContent($password);

function validateLength($text){
    if(strlen($text)>=8){
        return true;
    }else{
        return false;
    }
}

function validateContent($text){
    if (preg_match('/[A-Za-z]/', $text)
        && preg_match('/[0-9]/', $text) 
        && ctype_alnum($text)){
        return true;
    }else{
        return false;
    } 
}

if($valid_length && $valid_content){
    $result="Valid";
}else{
    $result="Not Valid";
}

$json = array("password" => $hashed_password, "Validated" => $result);

echo json_encode($json);
?>
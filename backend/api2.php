<?php
$text=$_GET["text"];

$left=0;
$right=strlen($text)-1;
$palindrome=true;
$result="";
while ($left <= $right) {
    if($text[$left]!=$text[$right]){
        $palindrome=false;
        break;
    }
    $left++;
    $right--;
}
if($palindrome){
    $result="Palindrome";
}else{
    $result="Not a Palindrome";
}
$json = array("text" => $text, "result" => $result);
echo json_encode($json);
?>
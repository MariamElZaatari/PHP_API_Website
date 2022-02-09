<?php

$text=$_GET["text"];
$result=trim($text);

$json = array("text" => $text, "trimmed" => $result);

echo json_encode($json);

?>
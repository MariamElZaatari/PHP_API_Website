<?php
//Get path from the request with no domain name
$request=$_SERVER["PHP_SELF"];

//PHP_API_Assignment/Api/Router.php/api[1,2,3,4]
$route=explode("/",$request)[4];

switch ($route){
    //Get the right directory of the api[1,2,3,4].php and import it into the router php file.
    case "api1":
        require __DIR__ . "/Controllers/api1.php";
        break;
    case "api2":
        require __DIR__ . "/Controllers/api2.php";
        break;
    case "api3":
        require __DIR__ . "/Controllers/api3.php";
        break;
    case "api4":
        require __DIR__ . "/Controllers/api4.php";
        break;
    //If user case was none of the api, then a json object with a 404 status and page not found is sent;
    default: 
        echo json_encode(array("status"=>404,"message"=>"Page Not Found"));
        break;
}
?>
<?php

//include('/assets2/php/config.php');
include("config.php");

session_start();
$user_id = $_SESSION["id"];

$session_end = $_POST["text"];

if($session_end === "logout"){
    session_destroy();
    echo "You have successfully signed out.";
}

?>
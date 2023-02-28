<?php

$requiredUrl = explode("/",  $_SERVER['REQUEST_URI']);

if (strpos($requiredUrl[2], '?') || $requiredUrl[2] == "index.php") {
    require("vendor/autoload.php");
} else {
    require("../vendor/autoload.php");
}

function getConnection()
{
    $client = new MongoDB\Client('mongodb://localhost:27017');

    return $client;
}

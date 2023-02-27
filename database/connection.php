<?php

require("../vendor/autoload.php");

function getConnection()
{
    $client = new MongoDB\Client('mongodb://localhost:27017');

    return $client;
}

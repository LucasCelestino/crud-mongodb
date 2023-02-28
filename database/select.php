<?php

require("connection.php");

$usersCollection = getConnection()->crud->users;

if (isset($_GET['id'])) {
    $id = filter_input(INPUT_GET, 'id', FILTER_DEFAULT);

    foreach ($usersCollection->find(["_id" => new \MongoDB\BSON\ObjectId($id)]) as $userParam) {
        $user = $userParam;
    }
} else {
    $users = $usersCollection->find();
}

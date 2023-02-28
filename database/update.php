<?php

require_once("connection.php");
require("../helpers/helpers.php");

$usersCollection = getConnection()->crud->users;

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
$dt_birth = filter_input(INPUT_POST, 'dt_birth', FILTER_SANITIZE_SPECIAL_CHARS);
$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRIPPED);


if ($_FILES["image"]["name"] != '') {
    validateWithFile("image", "http://localhost/crud-mongodb/edit.php");

    $extension = explode("/", $_FILES["image"]["type"])[1];
    $image = md5($_FILES["image"]["name"] . date("Y-m-d H:i:s")) . "." . $extension;

    if (!move_uploaded_file($_FILES["image"]["tmp_name"], '../images/' . $image)) {
        header('Location: http://localhost/crud-mongodb/add.php?upload_error=true');
        exit;
    }

    $updateUser = $usersCollection->updateOne(['_id' => new \MongoDB\BSON\ObjectId($id)], ['$set' => [
        'name' => $name,
        'email' => $email,
        'dt_birth' => $dt_birth,
        'image_url' => $image,
    ]]);

    header('Location: http://localhost/crud-mongodb/index.php?update_success=true');
    exit;
}

validate("http://localhost/crud-mongodb/edit.php");

$updateUser = $usersCollection->updateOne(['_id' => new \MongoDB\BSON\ObjectId($id)], ['$set' => [
    'name' => $name,
    'email' => $email,
    'dt_birth' => $dt_birth,
]]);

header('Location: http://localhost/crud-mongodb/index.php?update_success=true');
exit;

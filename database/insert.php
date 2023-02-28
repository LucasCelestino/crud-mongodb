<?php

require_once("connection.php");
require("../helpers/helpers.php");

$usersCollection = getConnection()->crud->users;

validateWithFile("image", "http://localhost/crud-mongodb/add.php");

$extension = explode("/", $_FILES["image"]["type"])[1];
$image = md5($_FILES["image"]["name"] . date("Y-m-d H:i:s")) . "." . $extension;

if (!move_uploaded_file($_FILES["image"]["tmp_name"], '../images/' . $image)) {
    header('Location: http://localhost/crud-mongodb/add.php?upload_error=true');
    exit;
}

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
$dt_birth = filter_input(INPUT_POST, 'dt_birth', FILTER_SANITIZE_SPECIAL_CHARS);


$insertedUser = $usersCollection->insertOne([
    'name' => $name,
    'email' => $email,
    'dt_birth' => $dt_birth,
    'image_url' => $image
]);

if ($insertedUser->getInsertedCount() > 0) {
    header('Location: http://localhost/crud-mongodb/add.php?success=true');
    exit;
}

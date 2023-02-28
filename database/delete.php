<?php
require("connection.php");

$usersCollection = getConnection()->crud->users;

if (isset($_GET['id'])) {
    $id = filter_input(INPUT_GET, 'id', FILTER_DEFAULT);

    $usersCollection->deleteOne(['_id' => new \MongoDB\BSON\ObjectId($id)]);

    header('Location: http://localhost/crud-mongodb/index.php?remove_success=true');
    exit;
} else {
    header('Location: http://localhost/crud-mongodb/index.php');
    exit;
}

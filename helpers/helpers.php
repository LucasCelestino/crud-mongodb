<?php

function validate()
{
    foreach ($_POST as $key => $value) {

        if ($value == '') {
            header('Location: http://localhost/crud-mongodb/add.php?empty_field=true');
            exit;
        }
    }
}

function validateWithFile(string $file_name)
{
    foreach ($_POST as $key => $value) {

        if ($value == '') {
            header('Location: http://localhost/crud-mongodb/add.php?empty_field=true');
            exit;
        }
    }

    if ($_FILES[$file_name]['name'] == null || ($_FILES['image']['type'] != "image/png" && $_FILES['image']['type'] != "image/jpeg")) {
        header('Location: http://localhost/crud-mongodb/add.php?error_image=true');
        exit;
    }
}

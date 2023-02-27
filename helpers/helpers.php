<?php

function validate(string $url)
{
    foreach ($_POST as $key => $value) {

        if ($value == '') {
            header("Location: " . $url . "?empty_field=true");
            exit;
        }
    }
}

function validateWithFile(string $file_name, string $url)
{
    foreach ($_POST as $key => $value) {

        if ($value == '') {
            header('Location: ' . $url . "?empty_field=true");
            exit;
        }
    }

    if ($_FILES[$file_name]['name'] == null || ($_FILES['image']['type'] != "image/png" && $_FILES['image']['type'] != "image/jpeg")) {
        header("Location: " . $url . "?error_image=true");
        exit;
    }
}

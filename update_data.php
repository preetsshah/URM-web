<?php

include("db.php");
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $ref = $_POST['ref'];

    $data = [
        'name' => $name,
        'email' => $email
    ];
    $pushData = $database->getReference($ref)->update($data);
    header("location: home.php");
}
elseif (isset($_GET['key'])){
    $database->getReference("contact_form_data/".$_GET['key'])->remove();
    header("location: retrieve_data.php");
}
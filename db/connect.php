<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

function connection() {
    $host = 'localhost';  //occ.mobiversal.com
    $user = 'occ';
    $password = 'occOCC';
    $database = 'occ';

    $connect = mysqli_connect($host, $user, $password, $database);
    if (!$connect) {
        die('Could not connect: ' . mysqli_error($connect));
    }

    return $connect;
}

$connect = connection();
?>
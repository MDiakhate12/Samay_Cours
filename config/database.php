<?php

try {
    /*
    $db = new PDO(
        DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME,
        DB_USERNAME,
        DB_PASSWORD
    )
    */

    $db = new PDO('mysql:host=localhost;dbname=test', 'root', ' ');

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error : " . $e->getMessage());
}

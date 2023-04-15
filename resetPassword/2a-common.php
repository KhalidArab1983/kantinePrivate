<?php
// (A) DATABASE SETTINGS
// ! CHANGE SETTINGS TO YOUR OWN
$dbhost = "localhost";
$dbname = "test";
$dbchar = "utf8";
$dbuser = "root";
$dbpass = "";

// (B) SETTINGS
$prvalid = 300; // Password reset is valid for 300 seconds

// (C) CONNECT TO DATABASE
try {
$pdo = new PDO(
    "mysql:host=$dbhost;dbname=$dbname;charset=$dbchar",
    $dbuser, $dbpass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);
} catch (Exception $ex) {
    die($ex->getMessage());
}
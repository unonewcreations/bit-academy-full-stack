<?php

// connecting to database
$host = "localhost";
$dbname = "netland";
$user = "bit_academy";
$password = "";

// set dsn
$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

// try connection if not error message
// create a pdo instance
try {
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $err) {
    echo "Database connection problem. " . $err->getMessage();
    exit();
}

?>

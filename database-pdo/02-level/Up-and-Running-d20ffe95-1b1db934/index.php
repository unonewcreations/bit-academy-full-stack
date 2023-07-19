<?php

$dbhost = "localhost";
$dbname = "netland";
$dbuser = "bit_academy";
$dbpass = "";

try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
} catch (PDOException $err) {
    echo "Database connection problem. " . $err->getMessage();
    exit();
}

$dataSeries = $conn->query('SELECT title, rating FROM series')->fetchAll(PDO::FETCH_ASSOC);
$dataMovies = $conn->query('SELECT title, length_in_minutes FROM movies')->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Data Objects</title>
</head>
<body>

<h1>PHP Data Objects</h1>

<p>
    
Connected to db of "netland with version 

<?php
$link = mysqli_connect("localhost", "bit_academy", "");

// echo server information
echo mysqli_get_server_info($link);
?>
</p>



    
</body>
</html>

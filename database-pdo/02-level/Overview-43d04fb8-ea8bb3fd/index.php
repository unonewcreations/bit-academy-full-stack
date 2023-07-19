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
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
    <title>Overview</title>
</head>
<body>

<h1>Welkom op het netland beheerders paneel!</h1>

<!-- table for series -->
<h2>Series</h2>
<table class="styled-table">

    <thead>
        <tr>
            <th>Title</th>
            <th>Rating</th>
        </tr>
    </thead>  
    
    <tbody>
        <?php

        for ($i = 0; $i < count($dataSeries); $i++) {
            echo "<tr>";
            echo "<td> {$dataSeries[$i]['title']}</td>";
            echo "<td> {$dataSeries[$i]['rating']}</td>";
            echo "</tr>";
        }

        ?>
    </tbody>
</table>

<!-- table for movies -->
<h2>Films</h2>
<table class="styled-table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Duur</th>
        </tr>
    </thead>    

    <tbody>
        <?php

        for ($i = 0; $i < count($dataMovies); $i++) {
            echo "<tr>";
            echo "<td> {$dataMovies[$i]['title']}</td>";
            echo "<td> {$dataMovies[$i]['length_in_minutes']}</td>";
            echo "</tr>";
        }
                
        ?>
    </tbody>
</table>
    
</body>
</html>

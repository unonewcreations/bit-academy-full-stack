<?php

// connecting to database

$dbhost = "localhost";
$dbname = "netland";
$dbuser = "bit_academy";
$dbpass = "";

// try connection if not error message
try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
} catch (PDOException $err) {
    echo "Database connection problem. " . $err->getMessage();
    exit();
}

$dataSeries = $conn->query("SELECT * FROM series")->fetchAll(PDO::FETCH_ASSOC);
$dataMovies = $conn->query("SELECT * FROM movies")->fetchAll(PDO::FETCH_ASSOC);


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
            <th>Details</th>
        </tr>
    </thead>  
    
    <tbody>

        <?php

        // get data using for each
        foreach ($dataSeries as $row) {
            $str = http_build_query($row);
            echo "<tr>";
            echo "<td> {$row['title']} </td>";
            echo "<td> {$row['rating']} </td>";
            echo "<td> <a href='detail_serie.php?$str'>Bekijk Details</a> </td>";
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
            <th>Details</th>
        </tr>
    </thead>    

    <tbody>
        <?php

         // get data using for each
        foreach ($dataMovies as $row) {
            $str = http_build_query($row);
            echo "<tr>";
            echo "<td> {$row['title']} </td>";
            echo "<td> {$row['length_in_minutes']} </td>";
            echo "<td> <a href='detail_film.php?$str'>Bekijk Details</a> </td>";
            echo "</tr>";
        }
                
        ?>
        </tbody>
        </table>
    
        </body>
        </html>

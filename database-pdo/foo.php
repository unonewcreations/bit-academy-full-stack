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

// set default attribute 
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

// get data from series an movies table
$stmtSeries = $pdo->query("SELECT * FROM series");
$stmtMovies = $pdo->query("SELECT * FROM movies");

// default sort order
$direction = "ASC";

// sort if category is series
if ($_GET['cat'] === 'series') {
    // set array for search values
        $orders = array("title","rating");
    
    // search array and output index
        $key = array_search($_GET['orderby'], $orders);
    
    // if logic is true then change sort order
    if (($_GET['orderby'] == 0 || 1) && $_GET['direction'] == "ASC") {
        $direction = "DESC";
    }
    
    // get sort order and make variable
    if ($_GET['direction']) {
        $sortOrder = $_GET['direction'];
    }
    
    // set variable with value
        $order = $orders[$key];
    
    // query table with set variables
        $stmtSeries = $pdo->query("SELECT * from series ORDER BY " . $order . " " . $sortOrder . "");
}

// sort if category is movies
if ($_GET['cat'] === 'movies') {
    // set array for search values
        $orders = array("title","length_in_minutes");
    
    // search array and output index
        $key = array_search($_GET['orderby'], $orders);
    
    // if logic is true then change sort order
    if (($_GET['orderby'] == 0 || 1) && $_GET['direction'] == "ASC") {
        $direction = "DESC";
    }
    
    // get sort order and make variable
    if ($_GET['direction']) {
        $sortOrder = $_GET['direction'];
    }
    
    // set variable with value
        $order = $orders[$key];
    
    // query table with set variables
        $stmtMovies = $pdo->query("SELECT * from movies ORDER BY " . $order . " " . $sortOrder . "");
}

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
    <script src="https://kit.fontawesome.com/da5920de64.js" crossorigin="anonymous"></script>
    <title>Order</title>
</head>
<body>

    <h1>Welkom op het netland beheerders paneel!</h1>

    <!-- table for series -->
    <h2>Series</h2>
    <table class="styled-table">

        <thead>
                    
            <tr>
                <th>
                    <a href="index.php?cat=series&orderby=title&direction=<?php echo $direction; ?>">Title</a>
                </th>
                <th>
                    <a href="index.php?cat=series&orderby=rating&direction=<?php echo $direction; ?>">Rating</a>
                </th>
                <th>Details</th>
            </tr>
        </thead>
          
        <tbody>

            <?php
                                    
            // get data using for each
            foreach ($stmtSeries as $row) {
                $str = http_build_query($row);
                echo "<tr data-ref='" . $row['id'] . "'>";
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
                <th>
                    <a href="index.php?cat=movies&orderby=title&direction=<?php echo $direction ?>">Title</a>
                </th>
                <th>
                    <a href="index.php?cat=movies&orderby=length_in_minutes&direction=<?php echo $direction ?>">Duur</a>
                </th>
                <th>Details</th>
            </tr>
        </thead>    
        
        <tbody>
            <?php

            // get data using for each
            foreach ($stmtMovies as $row) {
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

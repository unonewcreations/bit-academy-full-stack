<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handler</title>
</head>
<body>

<h1>

<?php

$num = $_GET["number"];

function countDown($num) 
{
    if ($num >= 0 && $num <= 10) {
        echo "Correct getal!";
    } else {
        throw new Exception("Oeps er is iets fout gegaan...");
    }
}

try {
    countDown($num);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>  

</h1>

</body>
</html>

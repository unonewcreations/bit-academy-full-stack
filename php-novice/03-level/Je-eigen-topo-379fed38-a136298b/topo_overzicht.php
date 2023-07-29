<?php

// ask how many activities
echo 'Hoeveel landen ga je toevoegen?' . PHP_EOL;
$number = (readline());

if (is_numeric($number)) {
    // loop the question and add to array
    $data = array();
    for ($i = 0; $i < $number; $i++) {
        $land = readline('Welk land wil je toevoegen?' . PHP_EOL);
        $hoofdstad = readline("Wat is hoofdstad van $land?" . PHP_EOL);
        $data[$land] = $hoofdstad;
    }
    // output array
    echo 'De volgende landen en steden ziten in de database:' . PHP_EOL;
    foreach ($data as $key => $value) {
        echo $key . ", " . $value . PHP_EOL;
    }
// exit if not number
} else {
    echo 'Input is not a number';
    exit();
}
<?php

// ask how many activities
echo 'Hoeveel activiteiten  wil je toevoegen?' . PHP_EOL;
$number = (readline());

if (is_numeric($number)) {
    // loop the question and add to array
    $array = array();
    for ($i = 0; $i < $number; $i++) {
        echo 'Wat wil je toevoegen aan jou bucket list?' . PHP_EOL;
        $item = readline();
        array_push($array, $item);
    }
    // output array
    echo 'Op jouw bucket list staat:' . PHP_EOL;
    foreach ($array as $item) {
        echo $item . PHP_EOL;
    }
// exit if not number
} else {
    echo 'Input is not a number';
    exit();
}

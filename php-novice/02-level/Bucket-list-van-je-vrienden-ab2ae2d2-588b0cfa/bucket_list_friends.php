<?php

// ask how many activities
echo 'Hoeveel vrienden zal ik vragen om hun droom?' . PHP_EOL;
$number = (readline());

if (is_numeric($number)) {
    // loop the question and add to array
    $data = array();
    for ($i = 0; $i < $number; $i++) {
        $name = readline('Wat is jouw naam?' . PHP_EOL);
        $dream = readline('Wat is jouw droom?' . PHP_EOL);
        $data[$name] = $dream;
    }
    // output array
    foreach ($data as $key => $value) {
        echo $key . ' heeft als droom: ' . $value . PHP_EOL;
    }
// exit if not number
} else {
    echo 'Input is not a number';
    exit();
}
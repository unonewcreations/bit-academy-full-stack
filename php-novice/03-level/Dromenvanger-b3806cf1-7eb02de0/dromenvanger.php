<?php

// ask number of friends
// echo 'Hoeveel vrienden zal ik vragen om hun droom?' . PHP_EOL;
$number = readline('Hoeveel vrienden zal ik vragen om hun droom? ' . PHP_EOL);

if (is_numeric($number)) {
    // loop the question and add to array
    $data = array();
    for ($i = 0; $i < $number; $i++) {
        $name = readline('Wat is jouw naam? ' . PHP_EOL);
        $numDreams = readline('Hoeveel dromen ga je opgeven? ' . PHP_EOL);
        for ($j = 0; $j < $numDreams; $j++) {
            $data[$name][] = readline('Wat is jouw droom? ' . PHP_EOL);
        }
    }

    var_dump($data);

    // output array
    foreach ($data as $key => $value) {
        foreach ($value as $k => $v) {
            echo "$key heeft dit als droom: $v" . PHP_EOL;
        }
    }
    
// exit if not number
} else {
    echo 'Input is not a number';
    exit();
}

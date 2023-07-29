<?php

// input variable   
$stapels = (int)(readline('Hoeveel stapels wil je hebben? ' . PHP_EOL));

// start variable
$i = 1;

// while loop
while ($i <= $stapels) {
    $j = 1;
    while ($j <= $i) {
        echo '*';
        $j++;
    }
    echo ' ' . PHP_EOL;
    $i++;
}
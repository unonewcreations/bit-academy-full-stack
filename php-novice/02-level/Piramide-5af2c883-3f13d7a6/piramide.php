<?php

// input variable   
$stapels = (int)(readline('Hoeveel stapels wil je hebben? ' . PHP_EOL));

// start variable
$j = '';

// loop and concatenation
for ($i = 0; $i < $stapels; $i++) {
    echo $j . PHP_EOL;
    $j .= '*';
}
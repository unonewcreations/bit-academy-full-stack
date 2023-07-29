<?php

$list = array();

function add(&$test)
{
    $product = readline("Wat wil je aan je boodschappenlijst toevoegen?");
    array_push($test, $product);
}

$test = $list;

function show(&$test)
{
    echo "Je boodschappen lijstje bevat nu:" . PHP_EOL;
    foreach ($test as $value) {
        echo $value . PHP_EOL;
    }
}

add($test);
show($test);

// Deze echo moet in het midden blijven staan
echo "Bedankt voor het gebruik van de boodschappenlijst!" . PHP_EOL;

while (strtolower(substr(trim(readline("Wil je meer producten toevoegen? (y/n)")), 0, 1)) === 'y') {
    add($test);
    show($test);
}

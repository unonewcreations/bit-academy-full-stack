<?php

// vraag hoeveel stapels
echo 'Hoeveel stapels wil je hebben?' . PHP_EOL;
$aantalStapels = (int)(readline());

// print aantal stapels
// buiten loop input stapels
for ($i = 0; $i < $aantalStapels; $i++) {
    // binnen loop output buiten loop
    for ($j = 0; $j <= $i; $j++) {
        echo '*';
    }
    echo ' ' . PHP_EOL;
}

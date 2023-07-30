<?php

$wisselgeld = intval($argv[1]);

if ($wisselgeld > 0) {
    echo "$wisselgeld x 1 euro";
} else {
    echo "Geen wisselgeld";
}

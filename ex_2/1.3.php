<?php

$fahrenheit = -50;

while ($fahrenheit <= 50) {

    $celsius = ($fahrenheit - 32) * 5 / 9;

    print "$fahrenheit F => " . intval($celsius) . " C" . PHP_EOL;

    $fahrenheit += 5;
}
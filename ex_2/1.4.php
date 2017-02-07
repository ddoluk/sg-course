<?php

for ($fahrenheit = -50; $fahrenheit <= 50; $fahrenheit += 5) {

    $celsius = ($fahrenheit - 32) * 5 / 9;

    print "$fahrenheit F => " . intval($celsius) . " C" . PHP_EOL;

}
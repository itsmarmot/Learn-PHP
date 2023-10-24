<?php

// assigment operator
$total = 0;

$fruit = 10000;
$chicken = 35000;
$orangeJuice = 1000;

$total += $fruit += $chicken += $orangeJuice;
echo $total . PHP_EOL;

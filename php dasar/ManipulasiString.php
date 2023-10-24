<?php

echo '1' . 1 . PHP_EOL;

// konversi tipe data
$str = (string) 100;
var_dump($str);

$int = (int) "100";
var_dump($int);

$name = "Reza";
echo "My name is $name[-1]s" . PHP_EOL;
echo "My name is {$name}s" . PHP_EOL;

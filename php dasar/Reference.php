<?php

$name = "Reza";

// Assign by reference
$otherName = &$name;
$otherName = "Dea";

echo $name . PHP_EOL;

// Passing by reference
function increment(int &$val)
{
    $val++;
}

$counter = 1;
increment($counter);
echo $counter . PHP_EOL;

// Return by reference
function &getValue()
{
    static $value = 100;
    return $value;
}

$a = &getValue();
$a = 200;

$b = &getValue();
echo $b . PHP_EOL;

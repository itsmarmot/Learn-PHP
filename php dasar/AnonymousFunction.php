<?php

$name = "Reza";
$sayHello = function () use ($name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello();

function sayGoodBye(string $name, callable $filter)
{
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}

$last = "Fikri";
sayGoodBye("Reza", function ($name) use ($last) {
    return strtoupper($name) . ' ' . $last;
});

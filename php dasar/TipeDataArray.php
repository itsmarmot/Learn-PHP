<?php

$names = [
    1 => "Reza",
    "1" => "Dea",
    1.5 => "Dian",
    true,
];
var_dump($names);

$values = [
    "name" => "Reza",
    "age" => 22,
    "Hello world",
];

["name" => $name, "age" => $age, 0 => $hello] = $values;
echo $name . PHP_EOL;
echo $hello . PHP_EOL;

$arr = [...$names, ...$values];
//var_dump($arr);

// multidimensi array
$reza = [
    "id" => "reza",
    "name" => "Reza",
    "age" => 22,
    "address" => [
        "city" => "Kepahiang",
        "country" => "Indonesia",
    ],
];
echo $reza["address"]["country"] . PHP_EOL;

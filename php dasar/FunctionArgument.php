<?php

function hello(int $age, string $name = "World"): string
{
    return "Hallo $name, my $age years old" . PHP_EOL;
}

echo hello(name: "Reza", age: 22);
echo hello(23, name: "Dea");
echo hello("25");

function sumAll(int ...$values)
{
    $result = 0;
    foreach ($values as $v) {
        $result += $v;
    }
    return "Total " . implode(" + ", $values) . ' = ' . $result;
}

$arr = [2, 4, 10];
echo sumAll(...$arr) . PHP_EOL;

<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Reza", "strtoupper");
sayHello("Reza", "strtolower");
sayHello("Reza", function ($name): string {
    return strtoupper($name);
});
sayHello("Reza", fn($name) => strtolower($name));

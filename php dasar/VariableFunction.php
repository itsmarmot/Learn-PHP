<?php

function foo()
{
    echo "Foo" . PHP_EOL;
}

function bar()
{
    echo "Bar" . PHP_EOL;
}

$fnf = "foo";
$fnf();

$fnb = "bar";
$fnb();

function sample($name) {
    return "Sample $name";
}

function sayHello(string $name, callable $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}
sayHello("reza", "strtoupper");
sayHello("reZa", "strtolower");
sayHello("reZa", "sample");

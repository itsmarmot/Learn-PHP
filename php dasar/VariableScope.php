<?php

// GLOBAL SCOPE
$age = 22;
function hello()
{
    global $age;

    // LOCAL SCOPE
    $name = "Reza";
    echo $name . $age . PHP_EOL;

    // var_dump($GLOBALS);
}

hello();

function increment()
{
    // STATIC SCOPE
    static $counter = 1;
    echo "Counter = " . $counter . PHP_EOL;
    $counter++;
}

increment();
increment();
increment();

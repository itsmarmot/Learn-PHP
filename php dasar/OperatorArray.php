<?php

$a = ["a" => "Reza", "b" => "Dea"];
$b = ["a" => "Puji", "b" => "Agus", "c" => "Dian"];
var_dump($a + $b); // Union

$a = ["Dea", "Dian"];
$b = [1 => "Dian", 0 => "Dea"];
var_dump($a == $b); // Equality (true)
var_dump($a === $b); // Identity (false)

var_dump($a != $b); // inEquality
var_dump($a !== $b); // inIdentity

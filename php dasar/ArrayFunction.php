<?php

$num = [1, 4, 6, 7, 9, 11, 10];
var_dump(array_filter($num, fn($n) => $n % 2 == 0));

var_dump(array_map(fn($n) => $n * 2, $num));

$arr1 = ["color" => "red", 2, 4];
$arr2 = ["a", "b", "color" => "green", "shape" => "trapezoid", 4];
var_dump(array_merge($arr1, $arr2));
var_dump($arr1 + $arr2);

$input = array("red", "green", "blue", "yellow");
array_splice($input, 2, 1);
var_dump($input);

$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
var_dump($stack);

$a[0] = 1;
$a[1] = 3;
$a[2] = 5;
var_dump(count($a));

$os = array("Mac", "NT", "Irix", "Linux");
var_dump(in_array("Irix", $os));

$numbers = range(1, 20);
shuffle($numbers);
var_dump($numbers);

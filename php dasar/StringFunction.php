<?php

echo "Rp" . number_format(100000, 2, ',', '.') . PHP_EOL;

$str = "Reza Sariful \x00 Fikri";
var_dump(str_contains($str, "Fikri"));

$nohp = "+62-857-5843-8583";
$arr = explode("-", $nohp);
var_dump($arr);
var_dump(implode("-", $arr));

$str = "  reza fikri ";
var_dump(trim($str));

var_dump(strlen($str));

$str = "Reza reza fikri";
var_dump(str_replace(["reza", "fikri"], ["Dea", "Dian"], $str));

<?php

$arr = [2, 4, 6];
$plus = 2;

var_dump(array_map(fn($n) => $n + $plus, $arr));

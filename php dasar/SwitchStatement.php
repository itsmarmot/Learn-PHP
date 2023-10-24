<?php

$nilai = "A";

switch ($nilai) :
    case "A":
        echo "Nilai anda bagus" . PHP_EOL;
        break;
    case "B":
        echo "Anda lulus" . PHP_EOL;
        break;
    default:
        echo "Anda tidak lulus" . PHP_EOL;
endswitch;

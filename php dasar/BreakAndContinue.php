<?php

$i = 1;
while (true) {
    if ($i > 10) {
        break;
    }

    echo $i++ . ',';
}

echo PHP_EOL;

for ($i = 0; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        continue;
    }

    echo $i . ',';
}

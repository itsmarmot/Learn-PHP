<?php

$nilai = 80;
$absen = 90;
if ($nilai >= 80 && $absen >= 80):
    echo "Nilai anda bagus" . PHP_EOL;
elseif ($nilai >= 75 && $absen >= 75):
    echo "Anda lulus" . PHP_EOL;
else:
    echo "Anda tidak lulus" . PHP_EOL;
endif;

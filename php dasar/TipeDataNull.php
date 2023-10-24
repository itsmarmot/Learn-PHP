<?php

$nama = "Reza";
$nama = null;

$age = null;

echo "Nama : " . $nama . PHP_EOL;
echo "Umur : " . $age . PHP_EOL;

var_dump(is_null($nama), is_null($age));

$example = "Contoh";
unset($example);

var_dump(isset($example));

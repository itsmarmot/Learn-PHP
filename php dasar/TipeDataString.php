<?php

echo 'Name : ';
echo 'Reza Sariful Fikri';
echo "\n";

echo "Nama : ";
echo "Reza\t Sariful\t Fikri\n";

$nama = "Reza";
// Heredoc
echo <<<REZA
Hallo nama $nama
Ini adalah cara ke-3 membuat string

REZA;

// Nowdoc
echo <<<'REZA'
Hallo nama $nama
Ini adalah cata ke-4 membuat string

REZA;

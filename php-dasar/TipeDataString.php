<?php

// Tipe Data String
// Hanya pada kutip dua bisa menambahkan \n \t dll
echo 'Name: ';
echo "M\t Hardi\t Raiz\n";

// Multi line string
// 1. Heredoc menggunakan TAG yang ditulis bebas dan ditutup dengan bebas juga
echo <<<EKO
Ini adalah contoh string yang sangat panjang,
dan juga tidak perlu mengetik ENTER
secara manual, "bisa quote juga" \n
EKO;

// 2. Nowdoc mirip seperti Heredoc yang membedakan Nowdoc tidak
// memiliki kemampuan parsing (\n \t)
echo <<<'EKO'
\t Ini adalah contoh string yang sangat panjang,
dan juga tidak perlu mengetik ENTER
secara manual, "bisa quote juga"
EKO;
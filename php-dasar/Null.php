<?php

$name = "Hardi";
$name = NUll;

$age = null;

echo "Name: $name \n";
echo "Age: $age \n";

// Mengecek Apakah Data Null
$is_name_null = is_null($name); // output: 1
var_dump($is_name_null); // print: bool(true)
echo "Is Name Null? : $is_name_null \n"; // return value 1: true, 0: false

// Menghapus nilai variabel
$hapus_variabel = "Hardi";
unset($hapus_variabel);

var_dump(is_null($hapus_variabel));
echo "Variabel Hapus: $hapus_variabel \n";

// Ketika menghapus variabel, kita tidak dapat lagi mengaksesnya
// Ketika mencoba function is_null($variabel) akan terjadi error
// Agar lebih aman gunakan isset($variabel) untuk menggecek nilai null
var_dump(isset($hapus_variabel));

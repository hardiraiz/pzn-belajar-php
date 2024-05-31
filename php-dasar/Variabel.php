<?php

$name = "Hardi";
$age = 30;

echo "Name: ";
echo $name;
echo "\n";
echo "Age : ";
echo $age;
echo "\n";

// Variable Variables
// Fitur ini membingungkan jika digunakan secara luas,
// disarankan tidak menggunakan fitur ini jika tidak terlalu diperlukan

$name = "Hardi";
$$name = "Raiz";

echo "\$name = ";
echo $name;
echo "\n";
echo "\$eko = ";
echo $Hardi; // value diambil dari $$name
echo "\n";

<?php

require_once "data/Person.php";

$person = new Person("Eko", "Subang");

var_dump($person);

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

$person2 = new Person("Budi", null);

var_dump($person2);

// error
// $person2->name = [];
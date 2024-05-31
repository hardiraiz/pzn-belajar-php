<?php

require_once "data/Person.php";

$eko = new Person("Hardi", "Pekanbaru");
$eko->sayHello("Budi");

$joko = new Person("Raiz", null);
$joko->sayHello(null);

$eko->info();
$joko->info();

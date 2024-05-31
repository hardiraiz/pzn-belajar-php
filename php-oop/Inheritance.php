<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Hardi";
var_dump($manager);

$vp = new VicePresident();
$vp->name = "Raiz";
var_dump($vp);
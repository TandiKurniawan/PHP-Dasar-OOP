<?php

require_once "data/Manager.php";

$manager = new manager();
$manager->name = "Budi";
$manager->sayHello("Joko");

$vp = new VicePresident();
// $vp->name = "Eko";
// $vp->sayHelllo(Joko);
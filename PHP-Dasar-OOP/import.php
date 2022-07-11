<?php 

require_once "data/conflict.php";
require_once "data/halper.php";

use Data\One\Conflict;
use function Helper\helpMe;
use const Helper\APPLICATION;

$conflict1 = new Conflict();
$conflict2 = new Data\Two\conflict();

helpMe();

echo APPLICATION . PHP_EOL;
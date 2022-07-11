<?php
require_once"object.php";

$person = new person();
$person->name = "Eko";
$person->addres = "Subang";
$person->country = "Indonesia";

var_dump($person);

echo "name : $person->name" . PHP_EOL;
echo "addres : $person->addres" . PHP_EOL;
echo "country : $person->country" .PHP_EOL;

$person2 = name Person();
$person2-> name = "Budi";
$person2-> addres = "Jakarta";
$person2-> country = "Indonesia";

var_dump($person2);
<?php

require_once"data/product.php";

$product = new product ("Apple",20000);

echo $product->getName() . PHP_EOL;
echo $product->getPrince() . PHP_EOL;

$dummy = new ProductDummy("Dummy", 1000);
$dummy->info();

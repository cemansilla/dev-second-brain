<?php
require dirname(__DIR__, 4) . "/vendor/autoload.php";

use App\Factories\ClothingProductFactory;
use App\Factories\ElectronicProductFactory;

$clothingProduct = ClothingProductFactory::create();
$clothingProduct->order();

$electronicProduct = ElectronicProductFactory::create();
$electronicProduct->order();

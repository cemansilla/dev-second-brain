<?php
require dirname(__DIR__, 4) . "/vendor/autoload.php";

use App\DesignPatterns\Factories\ClothingProductFactory;
use App\DesignPatterns\Factories\ElectronicProductFactory;

$clothingProduct = ClothingProductFactory::create();
$clothingProduct->order();

$electronicProduct = ElectronicProductFactory::create();
$electronicProduct->order();

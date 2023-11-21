<?php

namespace App\DesignPatterns\Factories;

use App\DesignPatterns\Interfaces\ProductFactoryInterface;
use App\DesignPatterns\Models\ClothingProduct;

class ClothingProductFactory extends ProductFactory
{
  public static function create(): ProductFactoryInterface
  {
    return new ClothingProduct();
  }
}

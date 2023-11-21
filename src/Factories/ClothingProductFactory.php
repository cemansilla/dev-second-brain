<?php

namespace App\Factories;

use App\Interfaces\ProductFactoryInterface;
use App\Models\ClothingProduct;

class ClothingProductFactory extends ProductFactory
{
  public static function create(): ProductFactoryInterface
  {
    return new ClothingProduct();
  }
}

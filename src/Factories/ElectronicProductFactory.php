<?php

namespace App\Factories;

use App\Interfaces\ProductFactoryInterface;
use App\Models\ElectronicProduct;

class ElectronicProductFactory extends ProductFactory
{
  public static function create(): ProductFactoryInterface
  {
    return new ElectronicProduct();
  }
}

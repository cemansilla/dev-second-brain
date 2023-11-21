<?php

namespace App\DesignPatterns\Factories;

use App\DesignPatterns\Interfaces\ProductFactoryInterface;
use App\DesignPatterns\Models\ElectronicProduct;

class ElectronicProductFactory extends ProductFactory
{
  public static function create(): ProductFactoryInterface
  {
    return new ElectronicProduct();
  }
}

<?php

namespace App\DesignPatterns\Models;

use App\DesignPatterns\Interfaces\ProductFactoryInterface;

class ClothingProduct implements ProductFactoryInterface
{
  public function order(): void
  {
    echo "Preparing Clothing Product..." . PHP_EOL;
    echo "Shipping Clothing Product..." . PHP_EOL;
  }
}

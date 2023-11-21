<?php

namespace App\Models;

use App\Interfaces\ProductFactoryInterface;

class ClothingProduct implements ProductFactoryInterface
{
  public function order(): void
  {
    echo "Preparing Clothing Product..." . PHP_EOL;
    echo "Shipping Clothing Product..." . PHP_EOL;
  }
}

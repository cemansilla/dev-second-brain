<?php

namespace App\Models;

use App\Interfaces\ProductFactoryInterface;

class ElectronicProduct implements ProductFactoryInterface
{
  public function order(): void
  {
    echo "Preparing Electronic Product..." . PHP_EOL;
    echo "Shipping Electronic Product..." . PHP_EOL;
  }
}

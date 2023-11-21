<?php

namespace App\Factories;

use App\Interfaces\ProductFactoryInterface;

abstract class ProductFactory
{
  abstract public static function create(): ProductFactoryInterface;
}

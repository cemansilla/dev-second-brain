<?php

namespace App\DesignPatterns\Factories;

use App\DesignPatterns\Interfaces\ProductFactoryInterface;

abstract class ProductFactory
{
  abstract public static function create(): ProductFactoryInterface;
}

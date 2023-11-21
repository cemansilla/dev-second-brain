<?php

namespace App\DesignPatterns\Interfaces;

interface PaymentStrategyInterface
{
  public function pay(float $amount): void;
  public function refund(string $operationCode): void;
}

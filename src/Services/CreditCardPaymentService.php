<?php

namespace App\Services;

use App\Interfaces\PaymentStrategyInterface;

class CreditCardPaymentService implements PaymentStrategyInterface
{
  public function pay(float $amount): void
  {
    echo "Proccesing payment of {$amount} with Credit card" . PHP_EOL;
  }

  public function refund(string $operationCode): void
  {
    echo "Proccesing refund of operation {$operationCode} with Credit card" . PHP_EOL;
  }
}

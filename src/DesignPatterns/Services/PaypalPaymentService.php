<?php

namespace App\DesignPatterns\Services;

use App\DesignPatterns\Interfaces\PaymentStrategyInterface;

class PaypalPaymentService implements PaymentStrategyInterface
{
  public function pay(float $amount): void
  {
    echo "Proccesing payment of {$amount} with PayPal" . PHP_EOL;
  }

  public function refund(string $operationCode): void
  {
    echo "Proccesing refund of operation {$operationCode} with PayPal" . PHP_EOL;
  }
}

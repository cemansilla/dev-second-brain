<?php

namespace App\DesignPatterns;

use App\DesignPatterns\Interfaces\PaymentStrategyInterface;

class PaymentProcessor
{
  private $paymentStrategy;

  public function __construct(PaymentStrategyInterface $paymentStrategy)
  {
    $this->paymentStrategy = $paymentStrategy;
  }

  public function setPaymentMethod(PaymentStrategyInterface $paymentStrategy)
  {
    $this->paymentStrategy = $paymentStrategy;
  }

  public function processPayment(float $amount)
  {
    // Some logic, apply discounts, user validations...
    echo "Processing order..." . PHP_EOL;

    $this->paymentStrategy->pay($amount);

    // More logic, process validation, notifications, show view, etc...
    echo "Order processed succesfully." . PHP_EOL;
  }

  public function processRefund(string $operationCode)
  {
    // Some logic, pay / user validations...
    echo "Refunding order {$operationCode}..." . PHP_EOL;

    $this->paymentStrategy->refund($operationCode);

    // More logic, process validation, notifications, show view, etc...
    echo "Order refunded succesfully." . PHP_EOL;
  }
}

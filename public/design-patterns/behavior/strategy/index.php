<?php

require dirname(__DIR__, 4) . "/vendor/autoload.php";

use App\DesignPatterns\PaymentProcessor;
use App\DesignPatterns\Services\CreditCardPaymentService;
use App\DesignPatterns\Services\PaypalPaymentService;

$creditCardPaymentService = new CreditCardPaymentService();
$paypalPaymentService = new PaypalPaymentService();

// Default or first selection
$paymentProccesor = new PaymentProcessor($creditCardPaymentService);
$paymentProccesor->processPayment(123.45);

// User needs to refund and change payment method
$paymentProccesor->processRefund("#AABB123");

// Some logic to change...
$paymentProccesor->setPaymentMethod($paypalPaymentService);
$paymentProccesor->processPayment(123.45);

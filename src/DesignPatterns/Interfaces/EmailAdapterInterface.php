<?php

namespace App\DesignPatterns\Interfaces;

interface EmailAdapterInterface
{
  public function send(string $to, string $message, string $subject, string $sender): bool;
}

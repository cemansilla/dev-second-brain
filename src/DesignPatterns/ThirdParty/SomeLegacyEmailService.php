<?php

namespace App\DesignPatterns\ThirdParty;

class SomeLegacyEmailService
{
  private $sender;
  private $apiKey;

  public function __construct($apiKey)
  {
    $this->apiKey = $apiKey;
  }

  public function setSender($sender)
  {
    $this->sender = $sender;
  }

  public function sendBeautifulEmail($to, $message, $subject): bool
  {
    echo "Sending email..." . PHP_EOL;
    echo "From: {$this->sender}" . PHP_EOL;
    echo "To: {$to}" . PHP_EOL;
    echo "Message: {$message}" . PHP_EOL;
    echo "Subject: {$subject}" . PHP_EOL;

    return true;
  }
}

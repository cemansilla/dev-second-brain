<?php

namespace App\Services;

use App\Interfaces\EmailAdapterInterface;
use App\ThirdParty\SomeLegacyEmailService;

class EmailSenderAdapterService implements EmailAdapterInterface
{
  private $senderService;

  public function __construct()
  {
    /**
     * Client-transparent initialization logic
     * This info can be stored in environments variables for example
     */
    $this->senderService = new SomeLegacyEmailService("AABB123");
  }

  /**
   * Non-existent template engine logic in the main class
   */
  public function getParsedBodyTemplate(string $htmlTemplate, array $data): string
  {
    return "<p>Body message...</p>";
  }

  public function send(string $to, string $message, string $subject, string $sender): bool
  {
    /**
     * Legacy or incompatible class wrapper logic
     */
    $this->senderService->setSender($sender);

    $someData = [
      'user.email' => $sender,
      'date' => date("d-m-Y H:i:s")
    ];
    $parsedMessage = $this->getParsedBodyTemplate($message, $someData);

    $this->senderService->sendBeautifulEmail($to, $parsedMessage, $subject);

    return true;
  }
}

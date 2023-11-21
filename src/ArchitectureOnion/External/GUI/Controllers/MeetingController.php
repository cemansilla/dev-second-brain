<?php

namespace App\ArchitectureOnion\External\GUI\Controllers;

use App\ArchitectureOnion\Core\ApplicationServices\MeetingService;

class MeetingController
{
  private $meetingService;

  public function __construct(MeetingService $meetingService)
  {
    $this->meetingService = $meetingService;
  }

  // Other controller methods
}

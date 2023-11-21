<?php

namespace App\ArchitectureOnion\Core\ApplicationServices;

use App\ArchitectureOnion\Core\DomainServices\IMeetingRepository;

class MeetingService
{
  private $meetingRepository;

  public function __construct(IMeetingRepository $meetingRepository)
  {
    $this->meetingRepository = $meetingRepository;
  }

  // Other Meeting methods
}

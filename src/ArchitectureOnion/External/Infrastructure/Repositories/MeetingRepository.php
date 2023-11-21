<?php

namespace App\ArchitectureOnion\External\Infrastructure\Repositories;

use App\ArchitectureOnion\Core\DomainServices\IMeetingRepository;

/**
 * 
 */
class MeetingRepository implements IMeetingRepository
{
  public function getById(int $id): void
  {
    echo "Meeting {$id}" . PHP_EOL;
  }
}

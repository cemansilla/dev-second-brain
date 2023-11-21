<?php

namespace App\ArchitectureOnion\Core\DomainServices;

interface IMeetingRepository
{
  public function getById(int $id): void;
  // Other repository methods
}

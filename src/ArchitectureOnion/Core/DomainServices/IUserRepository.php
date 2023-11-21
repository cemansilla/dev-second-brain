<?php

namespace App\ArchitectureOnion\Core\DomainServices;

use App\ArchitectureOnion\Core\DomainModel\User;

interface IUserRepository
{
  public function getById(int $id): User;
  // Other repository methods
}

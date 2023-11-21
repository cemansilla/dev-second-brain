<?php

namespace App\ArchitectureOnion\External\Infrastructure\Repositories;

use App\ArchitectureOnion\Core\DomainModel\User;
use App\ArchitectureOnion\Core\DomainServices\IUserRepository;

class UserRepository implements IUserRepository
{
  public function getById(int $id): User
  {
    echo "User {$id}" . PHP_EOL;
    return new User();
  }
}

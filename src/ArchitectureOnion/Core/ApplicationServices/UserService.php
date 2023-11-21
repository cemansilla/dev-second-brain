<?php

namespace App\ArchitectureOnion\Core\ApplicationServices;

use App\ArchitectureOnion\Core\DomainServices\IUserRepository;

class UserService
{
  private $userRepository;

  public function __construct(IUserRepository $userRepository)
  {
    $this->userRepository = $userRepository;
  }

  // Other UserService methods
  public function getById(int $userId)
  {
    $this->userRepository->getById($userId);
  }
}

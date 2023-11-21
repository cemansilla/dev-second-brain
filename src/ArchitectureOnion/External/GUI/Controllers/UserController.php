<?php

namespace App\ArchitectureOnion\External\GUI\Controllers;

use App\ArchitectureOnion\Core\ApplicationServices\UserService;
use App\ArchitectureOnion\Core\DomainModel\User;

class UserController
{
  private $userService;

  public function __construct(UserService $userService)
  {
    $this->userService = $userService;
  }

  public function someUserMethod(User $user)
  {
    echo "Doing some user action...";
  }

  // Other controller methods
}

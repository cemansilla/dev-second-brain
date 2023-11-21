<?php

require dirname(__DIR__, 3) . "/vendor/autoload.php";

use App\ArchitectureOnion\External\Infrastructure\Repositories\UserRepository;
use App\ArchitectureOnion\Core\ApplicationServices\UserService;
use App\ArchitectureOnion\External\GUI\Controllers\UserController;
use App\ArchitectureOnion\External\Infrastructure\FileSystem\FileService;

$userRepository = new UserRepository();
$userService = new UserService($userRepository);
$userController = new UserController($userService);

$fileSystemService = new FileService();

try {
  $userId = 1;
  $user = $userRepository->getById($userId);

  $userController->someUserMethod($user);

  $fileSystemService->someFileSystemMethod();
} catch (\Exception $e) {
  echo $e->getMessage();
}

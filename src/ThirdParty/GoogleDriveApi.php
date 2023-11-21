<?php

namespace App\ThirdParty;

class GoogleDriveApi
{
  private $isAuthenticated = false;
  private $authToken;

  public function __construct()
  {
  }

  public function auth(string $apiKey): bool
  {
    $this->authToken = $apiKey;
    // Some auth logic...
    $this->isAuthenticated = true;

    return true;
  }

  public function getDirectoryFiles(string $path): array
  {
    echo "Reading files in {$path}" . PHP_EOL;

    // Harcoded logic, it should be an middleware or another validation way
    if (!$this->isAuthenticated) {
      throw new \Exception("Not authorized to perform this action.");
    }

    echo "Successful reading!";

    return [];
  }

  public function uploadFile(string $path, string $fileName): bool
  {
    // Some validation logic, create destination path if not exists
    // Even can use Strategy pattern to handle file extension
    echo "Saving {$path}/{$fileName}" . PHP_EOL;

    // Harcoded logic, it should be an middleware or another validation way
    if (!$this->isAuthenticated) {
      throw new \Exception("Not authorized to perform this action.");
    }

    echo "Successful saving!";

    return true;
  }

  public function deleteFile(string $path, string $fileName): bool
  {
    // Some validation logic, create destination path if not exists
    // Even can use Strategy pattern to handle file extension
    echo "Deleting {$path}/{$fileName}" . PHP_EOL;

    // Harcoded logic, it should be an middleware or another validation way
    if (!$this->isAuthenticated) {
      throw new \Exception("Not authorized to perform this action.");
    }

    return true;
  }
}

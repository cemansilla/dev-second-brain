<?php

namespace App\DesignPatterns\Facades;

use App\DesignPatterns\ThirdParty\GoogleDriveApi;

class GoogleDrive
{
  private $googleDrive;

  public function __construct(string $apiKey)
  {
    $this->googleDrive = new GoogleDriveApi();
    /**
     * We don't expose auth logic
     * The facade handle this
     */
    $this->googleDrive->auth($apiKey);
  }

  /**
   * In this case the facade modify the return
   * adding some valdation in this method wrapper
   */
  public function getFilesInPath(string $path): array|bool
  {
    $files = $this->googleDrive->getDirectoryFiles($path);

    return empty($files) ? false : $files;
  }

  public function uploadFile(string $path, string $fileName)
  {
    return $this->googleDrive->uploadFile($path, $fileName);
  }

  /**
   * In this example we don't want to expose the delete method
   * So only ignore them
   */
}

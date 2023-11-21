<?php
require dirname(__DIR__, 4) . "/vendor/autoload.php";

use App\Facades\GoogleDrive;

$apiKey = "ABC123";
$googleDriveService = new GoogleDrive($apiKey);

$googleDriveService->uploadFile("/path/to/folder", "foo.bar");

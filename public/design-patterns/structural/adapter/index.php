<?php
require dirname(__DIR__, 4) . "/vendor/autoload.php";

use App\DesignPatterns\Services\EmailSenderAdapterService;

$emailSenderService = new EmailSenderAdapterService();
$emailSenderService->send("some-address@emailservice.com", "Adapter design pattern example.", "This is a test!", "me@emailservice.com");

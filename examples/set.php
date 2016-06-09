<?php
// Load composer
require __DIR__ . '\vendor\autoload.php';

$API_KEY = '212578930:AAHrcM7QUODJnl47uQeWgaKRiAItBmh2YV8';
$BOT_NAME = 'si_kebot';
$hook_url = 'localhost/php-telegram-bot-master/examples/hook.php';
try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($API_KEY, $BOT_NAME);

    // Set webhook
    $result = $telegram->setWebHook($hook_url);
    if ($result->isOk()) {
        echo $result->getDescription();
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    echo $e;
}
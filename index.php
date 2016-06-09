<?php
// Load composer


require __DIR__ . '\vendor\autoload.php';

$API_KEY = '212578930:AAHrcM7QUODJnl47uQeWgaKRiAItBmh2YV8';
$BOT_NAME = 'si_kebot';
$hook_url = 'https://sikebot.herokuapp.com/hook.php';
echo $API_KEY;
echo $BOT_NAME;
echo $hook_url;
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
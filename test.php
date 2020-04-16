<?php
/* include class file */
inlclude_once(__DIR__ . '/telegram-bot.php');

/* send message to channel via bot */
$telegram_bot = new telegram_bot;
$telegram_bot->connect(['your_bot_token_here', 'your_channel_username_here']);

$response = $telegram_bot->send('Test message! Sent at ' . date('Y-m-d H:i:s')); // true or false

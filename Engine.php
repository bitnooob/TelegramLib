<?php

// for example

require_once 'autoload.php';

$bot = new \telegram\bot\Bot('');
$longpoll = $bot->getLongPoll();

$logger = $bot->getLogger();

while (true) {
    $update = $longpoll->getUpdates();
    if (empty($update))
        continue;

    foreach ($update as $data) {
        $message = $data['message'];
        $from = $message['from'];

        $text = $message['text'];
        $user_id = $from['id'];

        $user = $bot->getUser($user_id);
        $user->sendMessage('hello', $bot->getButtonManager()->testInline());
    }
}
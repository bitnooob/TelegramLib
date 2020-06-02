<?php

// for example

require_once 'autoload.php';

$bot = new \telegram\bot\Bot('1153503634:AAEHMED_hTSyEEm8l3DqWKZSVbWVfCnpJAg');
$longpoll = $bot->getLongPoll();

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
        $user->sendMessage('hello');
        //$user->sendPhoto('https://cdnimg.rg.ru/img/content/178/22/40/kotik_d_850.jpg', 'hello');
    }
}
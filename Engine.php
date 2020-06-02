<?php

// for example

require_once 'autoload.php';

$bot = new \telegram\bot\Bot('token');
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
        //$user->sendMedia('Photo', 'https://cdnimg.rg.ru/img/content/178/22/40/kotik_d_850.jpg', 'hello');
        //$user->sendMedia('Audio', 'https://mp3melodii.ru/files_site_02/001/mellen_gi_remix_na_budilnik.mp3', 'hello');
    }
}
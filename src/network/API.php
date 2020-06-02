<?php

/**
 * @auhor bitnoob
 * @link https://vk.com/bitnoob
 */

declare(strict_types=1);

namespace telegram\bot\network;

use telegram\bot\Bot;

class API {

    /** @var Bot */
    private $main;

    public function getMain() : Bot {
        return $this->main;
    }

    public function __construct(Bot $main) {
        $this->main = $main;
    }

    public function sendMessage(int $id, string $text) : array {
        return $this->getMain()->getRequest()->send('sendMessage', [
            'chat_id' => $id,
            'text' => $text,
        ]);
    }

    public function sendPhoto(int $id, string $url, ?string $title = null) : array {
        $params = [
            'chat_id' => $id,
            'photo' => $url,
        ];

        if ($title !== null)
            $params['caption'] = $title;

        return $this->getMain()->getRequest()->send('sendPhoto', $params);
    }

    public function sendAudio(int $id, string $url, ?string $title = null) : array {
        $params = [
            'chat_id' => $id,
            'audio' => $url,
        ];

        if ($title !== null)
            $params['caption'] = $title;

        return $this->getMain()->getRequest()->send('sendAudio', $params);
    }

}
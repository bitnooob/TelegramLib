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

    public function sendMessage(int $id, string $text, ?array $markup = null) : array {
        $params = [
            'chat_id' => $id,
            'text' => $text,
        ];

        if ($markup !== null)
            $params['reply_markup'] = json_encode($markup);

        return $this->getMain()->getRequest()->send('sendMessage', $params);
    }

    public function sendMedia(string $type, int $id, string $url, ?string $title = null) : array {
        $params = [
            'chat_id' => $id,
            strtolower($type) => $url,
        ];

        if ($title !== null)
            $params['caption'] = $title;

        return $this->getMain()->getRequest()->send('send' . $type, $params);
    }

}
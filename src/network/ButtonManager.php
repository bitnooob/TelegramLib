<?php

/**
 * @auhor bitnoob
 * @link https://vk.com/bitnoob
 */

declare(strict_types=1);

namespace telegram\bot\network;

class ButtonManager {

    /**
     * For example
     */
    public function testInline() : array {
        return ['inline_keyboard' => [
            [
                ['text' => '1 button', 'url' => 'https://github.com/bitnooob/TelegramLib'],
            ],
            [
                ['text' => '2 button', 'callback_data' => 'callback'],
            ],
        ]];
    }

}
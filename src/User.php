<?php

/**
 * @auhor bitnoob
 * @link https://vk.com/bitnoob
 */

declare(strict_types=1);

namespace telegram\bot;

class User {

    /** @var Bot */
    private $main;

    /** @var int */
    private $id;

    public function getMain() : Bot {
        return $this->main;
    }

    public function getId() : int {
        return $this->id;
    }

    public function __construct(Bot $main, int $id) {
        $this->main = $main;
        $this->id = $id;
    }

    public function sendMessage(string $text, ?array $markup = null) : array {
        return $this->getMain()->getAPI()->sendMessage($this->getId(), $text, $markup);
    }

    /*
     * Available types: Photo - Voice
     * https://core.telegram.org/bots/api#available-methods
     */
    public function sendMedia(string $type, string $url, ?string $title = null) : array {
        return $this->getMain()->getAPI()->sendMedia($type, $this->getId(), $url, $title);
    }

}
<?php

/**
 * @auhor bitnoob
 * @link https://vk.com/bitnoob
 */

declare(strict_types=1);

namespace telegram\bot\network;

use telegram\bot\Bot;

class Request {

    /** @var Bot */
    private $main;

    /** @var string */
    private $url = 'https://api.telegram.org/bot';

    public function getMain() : Bot {
        return $this->main;
    }

    public function __construct(Bot $main) {
        $this->main = $main;
        $this->url .= $main->getToken() . '/';
    }

    public function send(string $method, array $params) : array {
        $params = isset($params) ? '?' . http_build_query($params) : '';
        $curl = curl_init($this->url . $method . $params);

        curl_setopt_array($curl, [
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => [],
            CURLOPT_RETURNTRANSFER => true,
        ]);

        $result = curl_exec($curl);
        curl_close($curl);

        return json_decode($result, true);
    }

}
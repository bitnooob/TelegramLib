<?php

/**
 * @auhor bitnoob
 * @link https://vk.com/bitnoob
 */

declare(strict_types=1);

namespace telegram\bot\network;

use telegram\bot\Bot;

class LongPoll {

    /** @var Bot */
    private $main;

    /** @var int */
    private $updateId;

    public function getMain() : Bot {
        return $this->main;
    }

    public function __construct(Bot $main) {
        $this->main = $main;
    }

    public function getUpdates() : array {
        error_reporting(0);

        $request = $this->getMain()->getRequest();
        $response = $request->send('getUpdates', [
            'offset' => $this->updateId + 1
        ]);

        if (isset($response['result'])) {
            $result = $response['result'];
            $this->updateId = $result[count($result) - 1]['update_id'];
        }

        return $response['result'];
    }

}
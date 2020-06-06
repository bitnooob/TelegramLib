<?php

/**
 * @auhor bitnoob
 * @link https://vk.com/bitnoob
 */

declare(strict_types=1);

namespace telegram\bot;

use telegram\bot\modules\Modules;
use telegram\bot\network\API;
use telegram\bot\network\ButtonManager;
use telegram\bot\network\LongPoll;
use telegram\bot\network\Request;
use telegram\bot\utils\Logger;

class Bot {

    /** @var string */
    private $token = '';

    /** @var Request */
    private $request;

    /** @var API */
    private $api;

    /** @var LongPoll */
    private $longpoll;

    public function getToken() : string {
        return $this->token;
    }

    public function getRequest() : Request {
        return $this->request;
    }

    public function getAPI() : API {
        return $this->api;
    }

    public function getLongPoll() : LongPoll {
        return $this->longpoll;
    }

    public function __construct(string $token) {
        if (version_compare('7.1.0', PHP_VERSION) > 0)
            exit("Для работы, версия PHP должна быть не меньше 7.1.0 \n");

        $this->token = $token;
        $this->initClasses();
    }

    private function initClasses() : void {
        $this->request = new Request($this);
        $this->api = new API($this);
        $this->longpoll = new LongPoll($this);
    }

    public function getUser(int $id) : User {
        return new User($this, $id);
    }

    public function getLogger() : Logger {
        return new Logger;
    }

    public function getButtonManager() : ButtonManager {
        return new ButtonManager;
    }

    public function getModules() : Modules {
        return new Modules;
    }

}
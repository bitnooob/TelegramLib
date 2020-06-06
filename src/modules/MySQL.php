<?php

/**
 * @auhor bitnoob
 * @link https://vk.com/bitnoob
 */

declare(strict_types=1);

namespace telegram\bot\modules;

use mysqli;

class MySQL {

    /** MySQL */
    private $database;

    public function getDatabase() {
        return $this->database;
    }

    public function connect(string $database, string $address = '127.0.0.1', string $user = 'root', string $password = '') : void {
        $this->database = mysqli_connect($address, $user, $password, $database);
    }

    public function disconnect() : void {
        $this->database->close();
    }

    public function query(string $query) {
        return mysqli_query($this->getDatabase(), $query);
    }

}
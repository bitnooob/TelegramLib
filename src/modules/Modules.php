<?php

/**
 * @auhor bitnoob
 * @link https://vk.com/bitnoob
 */

declare(strict_types=1);

namespace telegram\bot\modules;

class Modules {

    public function getMysql() : MySQL {
        return new MySQL;
    }

}